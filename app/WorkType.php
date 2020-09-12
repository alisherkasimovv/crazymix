<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class WorkType extends Model
{
    use AsSource;

    protected $fillable = [
        'name',
        'description',
        'main_work',
        'is_enabled'
    ];

}
