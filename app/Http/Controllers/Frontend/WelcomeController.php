<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Jetski;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    

    public function index()
    {
        $jetskis = Jetski::all();
        $entrada = DB::table('jetskis')
        ->where('price', '=', '80')
        ->get();
        $estandar = DB::table('jetskis')
        ->where('price', '=', '100')
        ->get();
        $premium = DB::table('jetskis')
        ->where('price', '=', '120')
        ->get();


        return view('front.index',['entrada' => $entrada, 'estandar' => $estandar,'premium'=>$premium]);
    }

    public function contact(){


        return view('front.contact');
    }
}
