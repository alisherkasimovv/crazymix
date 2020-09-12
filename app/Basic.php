<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Basic extends Model
{
    use AsSource, Attachable;

    protected $fillable = [
        'name',
        'address_main',
        'address_additional',
        'city',
        'country',
        'phone_main',
        'phone_additional',
        'email',
        'image',
        'is_active'
    ];

}
