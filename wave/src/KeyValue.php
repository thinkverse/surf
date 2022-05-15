<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

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
