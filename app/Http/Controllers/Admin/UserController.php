<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $users =DB::table('users')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
        $user = User::find($id);

        //querie para sacar todo lo relacionado con el alquiler que ha realizado

        $rents = DB::table('jetski_user')
            ->join('users', 'users.id', '=', 'jetski_user.user_id')
            ->join('jetskis', 'jetskis.id', '=', 'jetski_user.jetski_id')
            ->where('user_id', '=', $id)
            ->select(['jetski_user.id', 'jetski_user.date_in','jetski_user.date_out',  'users.name', 'jetskis.brand','jetskis.model','jetskis.price'])
            ->paginate(5);

            $intervals= array();
        
        foreach ($rents as $rent) {

            $horaInicio = new DateTime($rent->date_in);
            $horaTermino = new DateTime( $rent->date_out);
            $interval = $horaInicio->diff($horaTermino);
            $intervals[] = $interval->format("%H:%I:%S ");
            // $rents->interval->$interval->format("%H:%I:%S ");
            // dd( $interval->format("%H:%I:%S "));
  
          
        }

       

 

        return view('admin.users.show', ['user' => $user, 'rents' => $rents,'intervals'=>$intervals]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

 
}
