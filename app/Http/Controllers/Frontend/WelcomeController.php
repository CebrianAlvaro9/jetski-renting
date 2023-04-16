<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Jetski;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    

    public function index()
    {
        $jetskis = Jetski::all();


        return view('front.index',compact('jetskis'));
    }
}
