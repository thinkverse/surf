<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

/**
 * Wave\Subscription
 *
 * @property int $id
 * @property int $subscription_id
 * @property int|null $plan_id
 * @property int|null $user_id
 * @property string|null $status
 * @property string|null $update_url
 * @property string|null $cancel_url
 * @property \Illuminate\Support\Carbon|null $last_payment_at
 * @property \Illuminate\Support\Carbon|null $next_payment_at
 * @property \Illuminate\Support\Carbon|null $cancelled_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCancelUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCancelledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereLastPaymentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereNextPaymentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereSubscriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUpdateUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUserId($value)
 * @mixin \Eloquent
 */
class Subscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subscription_id',
        'plan_id',
        'user_id',
        'status',
        'next_bill_date',
        'update_url',
        'cancel_url',
        'cancelled_at',
        'last_payment_at',
        'next_payment_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'cancelled_at' => 'datetime',
        'last_payment_at' => 'datetime',
        'next_payment_at' => 'datetime',
    ];
}
