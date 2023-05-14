<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JetskiRequest;
use App\Models\Jetski;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JetskiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jetskis = DB::table('jetskis')->paginate(8);

        return view('admin.jetskis.index', compact('jetskis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jetskis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $request->validate([

            'brand' => 'required',
            'model' => 'required',
            'horse_power' => 'required|int|gt:0',
            'year'=>'required|int',
            'price'=>'required|gt:0'
        ], [
            'brand.required' => 'Debes rellenar el marca',
            'model.required' => 'Debes rellenar el modelo',
            'horse_power.required' => 'Debes rellenar el cv',
            'year.required' => 'Debes rellenar el año',
            'price.required' => 'Debes rellenar el precio',
            'horse_power.int' => 'Debe ser un numero ',
            'year.int' => 'El año debe ser un numero',
        

        ]);





        Jetski::create($request->all());

        return redirect()->action([JetskiController::class, 'index'])->with('exito', 'moto de agua añadido correctamente');
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
    public function edit(Jetski $jetski)
    {


        
        return view('admin.jetskis.edit', compact('jetski'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'brand' => 'required',
            'model' => 'required',
            'horse_power' => 'required|int|gt:0',
            'year'=>'required|int',
            'price'=>'required|gt:0'
        ], [
            'brand.required' => 'Debes rellenar el marca',
            'model.required' => 'Debes rellenar el modelo',
            'horse_power.required' => 'Debes rellenar el cv',
            'year.required' => 'Debes rellenar el año',
            'price.required' => 'Debes rellenar el precio',
            'horse_power.int' => 'Debe ser un numero ',
            'year.int' => 'El año debe ser un numero',
        

        ]);

        $p= Jetski::find($id);

        $p->brand=$request->input("brand");
        $p->model=$request->input("model");
        $p->horse_power=$request->input("horse_power");
        $p->year=$request->input("year");
        $p->price=$request->input("price");
        $p->save();//save es un metodo eloquent
      
        return redirect()->action([JetskiController::class, 'index'])->with('exito','Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $p= Jetski::find($id);
        $p->delete();
        return redirect()->action([JetskiController::class, 'index'])->with('exito','Moto borrada correctamente');
    }
}
