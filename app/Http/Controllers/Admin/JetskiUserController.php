<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JetskiUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JetskiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $rents = JetskiUser::all();
 
        return view('admin.jetskisUsers.index',compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        //mejor que se pueda modificar la hora

        $horario = array("10", "11", "12", "13", "14", "15", "16", "17", "18");
       
        $jetskisUser= JetskiUser::find($id);

      
        return view('admin.jetskisUsers.edit',compact("horario"),compact('jetskisUser'));

    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

      

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

    

        return redirect()->action([JetskiUserController::class, 'index'])->with('exito','Cliente actualizado correctamente');

    }

 


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
