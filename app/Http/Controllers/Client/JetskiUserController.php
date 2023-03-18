<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Jetski;
use App\Models\JetskiUser;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class JetskiUserController extends Controller
{
    
    public function index()
    {

        $horario = array("10", "11", "12", "13","14","15","16","17","18");
        return view('client.rent.date-check',compact('horario'));

    }

    public function disponibilidad(Request $request){

    $hora= $request->input("hora");
    $mifecha= $request->input("fecha");
    //generar session con la hora y la fecha 

    $NuevaFecha = strtotime ( "+$hora hour " , strtotime ($mifecha) ) ; 
    //Preprado para poder meter minutos
    //$NuevaFecha = strtotime ( '+18 minute' , $NuevaFecha ) ; 
    $NuevaFecha = date ( 'Y-m-d H:i:s' , $NuevaFecha); 



//de esta forma podemos coger todas las reservas que hay para esa fecha y hora y mostrar solo las motos disponibles

        $motos = DB::table('jetskis')->pluck('id')->toArray();
        $resultados = DB::table('jetski_user')
        ->select('jetski_id')
            ->whereIn('jetski_id', $motos)
            ->where( 'date_in','LIKE',"$NuevaFecha")
            ->pluck('jetski_id')
            ->toArray();
        $motoslibres = DB::table('jetskis')
        ->whereNotIn('id', $resultados)
        ->get();


        session(['date_in' =>  $NuevaFecha]);
       

        return view('client.rent.jetski-check',compact('motoslibres'));
    }

    public function seleccion(Request $request){

        $jetski_id= $request->input("id");

        session(['jetski_id' =>  $jetski_id]);

        return response()->redirectTo(route('pago'), Response::HTTP_FOUND);

    }

    public function pago(){

        $p = new JetskiUser();
        $p->jetski_id=session(['jetski_id']);
    
        $p->save();//save es un metodo eloquent

        session(['jetski_id']);

        return view('client.index');

    }

}
