<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\JetskiUser;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function show(string $id)
    {


 
        $user = User::find($id);

        //querie para sacar todo lo relacionado con el alquiler que ha realizado

      
        $rents = DB::table('jetski_user')
            ->join('users', 'users.id', '=', 'jetski_user.user_id')
            ->join('jetskis', 'jetskis.id', '=', 'jetski_user.jetski_id')
            ->where('user_id', '=', $id)
            ->select(['jetski_user.id', 'jetski_user.date_in','jetski_user.date_out',  'users.name', 'jetskis.brand','jetskis.model','jetskis.price'])->paginate(5);;


            $intervals= array();
        foreach ($rents as $rent) {

            $horaInicio = new DateTime($rent->date_in);
            $horaTermino = new DateTime( $rent->date_out);
            $interval = $horaInicio->diff($horaTermino);
            
            $intervals[] = $interval->format("%H:%I:%S ");
            // $rents->interval->$interval->format("%H:%I:%S ");
            // dd( $interval->format("%H:%I:%S "));
  
          
        }
   
    

        return view('client.users.show', ['user' => $user, 'rents' => $rents,'intervals'=>$intervals]);
    }
}
