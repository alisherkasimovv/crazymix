<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class About extends Model
{
    use AsSource;

    protected $fillable = [
        'name',
        'image',
        'text',
        'is_enabled'
    ];
}
