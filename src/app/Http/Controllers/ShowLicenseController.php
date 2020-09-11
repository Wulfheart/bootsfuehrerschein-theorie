<?php

namespace App\Http\Controllers;

use App\Models\License;
use Carbon\CarbonPeriod;
use DB;
use Illuminate\Http\Request;

class ShowLicenseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(License $license)
    {
        $answered = $license->answeredTasks()->currentUser()->count();
        $answeredCorrectly = $license->answeredTasks()->currentUser()->where('answered_correctly', true)->count();

        return view('license', [
            'license' => $license,
            'stats' => [
                'total' => $license->tasks()->count(),
                'answered' => $answered,
                'answered_correctly' => $answeredCorrectly,
            ]
        ]);
    }
}
