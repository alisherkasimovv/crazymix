<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class WorkType extends Model
{
    use AsSource, Filterable;

    protected $fillable = [
        'name',
        'description',
        'main_work',
        'is_enabled'
    ];

    protected $allowedSorts = [
        'main_work'
    ];

    public function countAllMainWorks()
    {
        return DB::table('work_types')->where('main_work', 1)->count();
    }

}
