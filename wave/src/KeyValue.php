<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

/**
 * Wave\KeyValue
 *
 * @property int $id
 * @property string $type
 * @property string $key
 * @property string $value
 * @property string $key_value_type
 * @property int $key_value_id
 * @property-read Model|\Eloquent $keyValue
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue whereKeyValueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue whereKeyValueType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyValue whereValue($value)
 * @mixin \Eloquent
 */
class KeyValue extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'key',
        'value',
        'key_value_id',
        'key_value_type',
    ];

    public function keyValue()
    {
        return $this->morphTo();
    }
}
