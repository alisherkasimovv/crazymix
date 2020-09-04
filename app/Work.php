<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Work extends Model
{
    use AsSource, Attachable, Sluggable;

    protected $fillable = [
        'name',
        'brief',
        'description',
        'is_enabled',
        'shown_at_main',
        'slug'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
