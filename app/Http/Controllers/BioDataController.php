<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioDataController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Biodata';

        return view('biodata', ['pageTitle' => $pageTitle]);
    }
}
