<?php

namespace Wave;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Lab404\Impersonate\Models\Impersonate;
use TCG\Voyager\Models\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Wave\Announcement;
use Wave\Plan;
use Wave\Subscription;

/**
 * Wave\User
 *
 * @property Carbon $trial_ends_at
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Announcement[] $announcements
 * @property-read int|null $announcements_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wave\ApiKey[] $apiKeys
 * @property-read int|null $api_keys_count
 * @property mixed $locale
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wave\KeyValue[] $keyValues
 * @property-read int|null $key_values_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \TCG\Voyager\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read Subscription|null $subscription
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable implements JWTSubject, MustVerifyEmail
{
    use Notifiable;
    use Impersonate;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'trial_ends_at',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'trial_ends_at' => 'datetime',
    ];

    public function keyValues()
    {
        return $this->morphMany(KeyValue::class, 'key_value');
    }

    public function keyValue($key)
    {
        return $this->morphMany(KeyValue::class, 'key_value')->firstWhere('key', $key);
    }

    public function profile($key)
    {
        return $this->keyValue($key)?->value ?: '';
    }

    public function onTrial(): bool
    {
        return !is_null($this->trial_ends_at);
    }

    public function subscribed($plan): bool
    {
        $plan = Plan::firstWhere('slug', $plan);

        if ($this->hasRole('admin') && $plan?->default) {
            return true;
        }

        return $this->hasRole($plan?->slug);
    }

    public function subscriber()
    {
        if ($this->hasRole('admin')) {
            return true;
        }

        $roles = $this->roles->pluck('id')->push($this->role_id)->unique();
        $plans = Plan::whereIn('role_id', $roles)->count();

        return $plans > 0;
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    /**
     * @return bool
     */
    public function canImpersonate()
    {
        // If user is admin they can impersonate
        return $this->hasRole('admin');
    }

    /**
     * @return bool
     */
    public function canBeImpersonated()
    {
        // Any user that is not an admin can be impersonated
        return !$this->hasRole('admin');
    }

    public function hasAnnouncements()
    {
        $announcement = Announcement::latest()->first();

        if (!$announcement) {
            return false;
        }

        return !$this->announcements->contains($announcement->id);
    }

    public function announcements()
    {
        return $this->belongsToMany(Announcement::class);
    }

    public function createApiKey($name)
    {
        return ApiKey::create(['user_id' => $this->id, 'name' => $name, 'key' => Str::random(60)]);
    }

    public function apiKeys()
    {
        return $this->hasMany(ApiKey::class)->orderBy('created_at', 'DESC');
    }

    public function daysLeftOnTrial()
    {
        // User is either not on a trial or the trial has exceeded the date.
        if (! $this->onTrial() || $this->trial_ends_at->lessThan(now())) {
            return -1;
        }

        return $this->trial_ends_at->addDay()->diffInDays();
    }

    public function avatar()
    {
        return Storage::url($this->avatar);
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
