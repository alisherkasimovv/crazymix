<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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

    public function countEnabledAboutInfo()
    {
        return DB::table('abouts')->where('is_enabled', 1)->count();
    }
}
