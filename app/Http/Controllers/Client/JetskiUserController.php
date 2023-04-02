<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cancellation;
use App\Models\Jetski;
use App\Models\JetskiUser;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PhpParser\Node\Expr\New_;

//FALTA PONER REQUEST DE NO SE PUEDE PONER FECHAS INFERIORES A LA DEL DIA SIGUIENTE  
// QUE SE ENVIE EL PRECIO DE LA MOTO DE AGUA DE STIRPE CREANDO LA COLUMNA NUEVA CON ELLO

class JetskiUserController extends Controller
{

    public function index()
    {

        $horario = array("10", "11", "12", "13", "14", "15", "16", "17", "18");
        return view('client.rent.date-check', compact('horario'));
    }

 

    public function disponibilidad(Request $request)
    {

     session()->forget(['fecha', 'jetski_id', 'price', 'price_id']);


      
        $fecha_minima = Carbon::now()->addDay()->format('Y-m-d');
        $fecha_maxima = Carbon::now()->addMonth()->format('Y-m-d');

        $request->validate(
            [
                'fecha' => "required|date|after_or_equal:$fecha_minima|before_or_equal:$fecha_maxima",
                'hora' => "required"
            ],
            [
                'fecha.required' => 'Debes rellenar la fecha',
                'fecha.after_or_equal' => 'La fecha tiene que ser superior a la de hoy',
                'fecha.before_or_equal' => 'La fecha no puede ser superior a un mes',
                'hora.required' => 'Selecciona una hora valida'
            ]
        );

        $hora = $request->input("hora");
        $mifecha = $request->input("fecha");
        //generar session con la hora y la fecha 

        $NuevaFecha = strtotime("+$hora hour ", strtotime($mifecha));
        //Preprado para poder meter minutos
        //$NuevaFecha = strtotime ( '+18 minute' , $NuevaFecha ) ; 
        $NuevaFecha = date('Y-m-d H:i:s', $NuevaFecha);

        //de esta forma podemos coger todas las reservas que hay para esa fecha y hora y mostrar solo las motos disponibles

        $motos = DB::table('jetskis')->pluck('id')->toArray();

        $resultados = DB::table('jetski_user')
            ->select('jetski_id')
            ->whereIn('jetski_id', $motos)
            ->where('date_in', 'LIKE', "$NuevaFecha")
            ->pluck('jetski_id')
            ->toArray();

        $motoslibres = DB::table('jetskis')
            ->whereNotIn('id', $resultados)
            ->get();
        session(['fecha' => $NuevaFecha]);





        return view('client.rent.jetski-check', compact('motoslibres'));
    }

    public function seleccion(Request $request)
    {
        $id_moto_seleccionada = $request->input('moto_seleccionada');

        $moto_seleccionada= Jetski::find($id_moto_seleccionada);
    
        session(['jetski_id' => $moto_seleccionada->id]);
        session(['price' => $moto_seleccionada->price]);
        session(['price_id' => $moto_seleccionada->price_id]);

        $url = route('pago').'?price_id='.$moto_seleccionada->price_id;



        //mandar el precio pero debe estar guardado en la base de datos

        return response()->redirectTo($url, Response::HTTP_FOUND);
    }

    public function pago(Request $request)
    {


        $status = $request->query('checkout');

        if ($status === 'success') {
            // El pago se ha completado correctamente
            // Realizar las acciones necesarias, como actualizar la base de datos


            $p = new JetskiUser();
            $p->jetski_id = session('jetski_id');
            $p->user_id = Auth::user()->id;
            $p->date_in = session('fecha');
            $p->date_out = date('Y-m-d H:i:s', strtotime('+1 hour', strtotime(session('fecha'))));
            $p->total_price = session('price');
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

    public function edit(string $id)
    {


        //mejor que se pueda modificar la hora

        $horario = array("10", "11", "12", "13", "14", "15", "16", "17", "18");
       
        $jetskisUser= JetskiUser::find($id);

      
        return view('client.jetskisUsers.edit',compact("horario"),compact('jetskisUser'));

    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $fecha_minima = Carbon::now()->addDay()->format('Y-m-d');
        $fecha_maxima = Carbon::now()->addMonth()->format('Y-m-d');
        $hora = $request->input("hora");
        $mifecha = $request->input("fecha");
        //generar session con la hora y la fecha 

        $NuevaFecha = strtotime("+$hora hour ", strtotime($mifecha));
        //Preprado para poder meter minutos
        //$NuevaFecha = strtotime ( '+18 minute' , $NuevaFecha ) ; 
        $NuevaFecha = date('Y-m-d H:i:s', $NuevaFecha);

        $id_moto= DB::table('jetski_user')
        ->select('jetski_id')
        ->where('id', 'LIKE', "$id")
        ->pluck('jetski_id')
        ->toArray();

   
        $disponible = DB::table('jetski_user')
            ->select('jetski_id')
            ->where('jetski_id', 'LIKE', "$id_moto[0]")
            ->where('date_in', 'LIKE', "$NuevaFecha")
            ->exists();



        $request->validate(
            [
                'fecha' => "required|date|after_or_equal:$fecha_minima|before_or_equal:$fecha_maxima",
                'hora' => $disponible ? 'required|exists:jetski_user,date_in' : 'required'
            ],
            [
                'fecha.required' => 'Debes rellenar la fecha',
                'fecha.after_or_equal' => 'La fecha tiene que ser superior a la de hoy',
                'fecha.before_or_equal' => 'La fecha no puede ser superior a un mes',
                'hora.required' => 'Selecciona una hora valida',
                'hora.exists' => 'Esta hora no se encuentra disponible'
            ]
        );

     
        JetskiUser::where('id', $id)
        ->update([
            'date_in' => $NuevaFecha,
            'date_out' => date('Y-m-d H:i:s', strtotime('+1 hour', strtotime($NuevaFecha)))
        ]);

    

        return redirect()->route('client.users.show', Auth::user()->id)->with('exito','Reserva actualizada correctamente');

    }

    public function cancellation(Request $request, string $id)
    {

  
        $infoalquiler = JetskiUser::find($id);

   

        $infocliente= User::find($infoalquiler->user_id);


        $request->validate(
            [
                'reason' => "required",
               
            ],
            [
                'reason.required' => 'Es importante para nostros saber la razon para poder seguir mejorando',
           
            ]
        );

        $p= new Cancellation();
        $p->user_id=$infoalquiler->id;
        $p->name=$infocliente->name;
        $p->email=$infocliente->email;
        $p->reason=$request->input("reason");
        $p->purchase_date=$infoalquiler->created_at;
        $p->price=$infoalquiler->total_price;
        $p->save();//save es un metodo eloquent

        $infoalquiler->delete();
        
     
       

    

        return redirect()->route('client.users.show', Auth::user()->id)->with('exito','Reserva eliminada correctamente');

    }

 

}
