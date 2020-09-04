<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Social extends Model
{
    use AsSource;

    protected $fillable = [
        'name',
        'url',
        'icon',
        'is_enabled'
    ];

}
