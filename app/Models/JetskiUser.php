<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JetskiUser extends Model
{
    use HasFactory;

    protected $fillable=["user_id","jetski_id","date_in","date_out","total_price"];
    protected $table='jetski_user';


//     public function setDateInAttribute($value)
// {
//     $this->attributes['date_in'] = date("d-m-Y",strtotime($value));
// }


// public function getDateInAttribute($value)
// {

//    return date("d-m-Y",strtotime($value));

    
// }

public function cancellations()
{
    return $this->hasMany(Cancellation::class);
}


public function getModelAttribute($value)

{

return strtoupper($value);
}

}
