<?php

namespace Wave;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Page as Model;

class Page extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author_id',
        'title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_title',
        'status',
    ];

    public function link()
    {
        return url('p/' . $this->slug);
    }

    public function image()
    {
        return Voyager::image($this->image);
    }
}
