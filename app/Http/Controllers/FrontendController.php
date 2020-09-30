<?php

namespace App\Http\Controllers;

use App\Basic;
use App\Social;
use App\Work;
use App\WorkType;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $basic = Basic::where('is_active', 1)->firstOrFail();
        $visibleWorks = Work::where(['shown_at_main' => 1, 'is_enabled' => 1])->get();
        $allWorks = Work::where('is_enabled', 1)->get();
        $socials = Social::where('is_enabled', 1)->get();
        $workTypeAtMain = WorkType::where(['main_work' => 1, 'is_enabled' => 1])->get();
        $workTypes = WorkType::where('is_enabled', 1)->get();

        return view(
            'index',
            [
                'basic' => $basic,
                'visibleWorks' => $visibleWorks,
                'allWorks' => $allWorks,
                'socials' => $socials,
                'workTypeAtMain' => $workTypeAtMain,
                'workTypes' => $workTypes
            ]
        );
    }
}
