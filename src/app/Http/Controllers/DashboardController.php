<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $licenses = License::all();
        return view('dashboard', [
            'licenses' => $licenses,
        ]);
    }
}
