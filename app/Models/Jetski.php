<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jetski extends Model
{
    use HasFactory;
    
    protected $fillable = ['brand','model','horse_power','year','price','price_id'];

    public function setBrandAttribute($value)
    {
        $this->attributes['brand'] = ucfirst(strtolower($value));
    }

    public function getModelAttribute($value)

    {

    return strtoupper($value);
    }


    public function users() {
        return $this->belongsToMany(User::class);
    }

}
