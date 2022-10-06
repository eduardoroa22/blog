<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Privaci extends Controller
{
    public function __invoke(Request $request)
    {
        
        return view('privacy.avisos-legales');
    }
    
}
