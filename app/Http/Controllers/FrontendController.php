<?php

namespace App\Http\Controllers;

use App\Basic;
use App\Social;
use App\Work;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $basic = Basic::where('is_active', 1)->firstOrFail();
        $visibleWorks = Work::where(['shown_at_main' => 1, 'is_enabled' => 1]);
        $allWorks = Work::where('is_enabled', 1);
        $socials = Social::where('is_enabled', 1);

        return view(
            'index',
            [
                'basic' => $basic,
                'visibleWorks' => $visibleWorks,
                'allWorks' => $allWorks,
                'socials' => $socials
            ]
        );
    }
}
