<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Jetski;
use App\Models\JetskiUser;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



//FALTA PONER REQUEST DE NO SE PUEDE PONER FECHAS INFERIORES A LA DEL DIA SIGUIENTE  
// QUE SE ENVIE EL PRECIO DE LA MOTO DE AGUA DE STIRPE CREANDO LA COLUMNA NUEVA CON ELLO

class JetskiUserController extends Controller
{
    
    public function index()
    {

        $horario = array("10", "11", "12", "13","14","15","16","17","18");
        return view('client.rent.date-check',compact('horario'));

    }

    public function disponibilidad(Request $request){
        session()->forget('fecha');
        session()->forget('jetski_id');

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

      

        session(['fecha' => $NuevaFecha]);
       
    
      
       
 
        return view('client.rent.jetski-check',compact('motoslibres'));
    }

    public function seleccion(Request $request){

        $jetski_id= $request->input("id");

        session(['jetski_id' => $jetski_id]);

        //mandar el precio pero debe estar guardado en la base de datos

        return response()->redirectTo(route('pago'), Response::HTTP_FOUND);

    }

    public function pago(Request $request){

   
        $status = $request->query('checkout');

        if ($status === 'success') {
            // El pago se ha completado correctamente
            // Realizar las acciones necesarias, como actualizar la base de datos

            
      $p = new JetskiUser();
        $p->jetski_id=session('jetski_id');
        $p->user_id=Auth::user()->id;
        $p->date_in=session('fecha');
        $p->date_out=session('fecha');
        $p->total_price="20";
        $p->save();
        //save es un metodo eloquent
        session()->forget('fecha');
        session()->forget('jetski_id');
       
        } else {

            // El pago ha fallado o se ha cancelado
        

        }


      

        // $p = new JetskiUser();
        // $p->jetski_id=session(['jetski_id']);
    
        // $p->save();//save es un metodo eloquent

        // session(['jetski_id']);

        return view('client.index');

    }

}
