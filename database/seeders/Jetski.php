<?php

namespace Database\Seeders;

use App\Models\Jetski as ModelsJetski;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jetski extends Seeder
{
    /**
     * Run the database seeds.
     *    protected $fillable = ['brand','model','horse_power','year','price'];
     */
    public function run(): void
    {

           /* Gama standar-trix*/ 
        ModelsJetski::create([
            'brand' => 'Sea-Doo',
            'model' => 'Spark',
            'horse_power' => '90',
            'year' => '2020', 
            'price'=>'80',
            'price_id' => 'price_1MpxCOK47KXog234v8PiY1iN'
         
        ]);
        ModelsJetski::create([
            'brand' => 'Sea-Doo',
            'model' => 'Spark Trix',
            'horse_power' => '90',
            'year' => '2021', 
            'price'=>'80',
            'price_id' => 'price_1MpxCOK47KXog234v8PiY1iN'
         
        ]);
        /* Gama Wave-Runner*/ 
        ModelsJetski::create([
            'brand' => 'Sea-Doo',
            'model' => 'GTI-130',
            'horse_power' => '130',
            'year' => '2021', 
            'price'=>'100',
            'price_id' => 'price_1MpxGhK47KXog2342yEU4dLt'
         
        ]);
 
        ModelsJetski::create([
            'brand' => 'Sea-Doo',
            'model' => 'GTX',
            'horse_power' => '170',
            'year' => '2021', 
            'price'=>'100',
            'price_id' => 'price_1MpxGhK47KXog2342yEU4dLt'
         
        ]);

     /* Gama Premium*/ 
     ModelsJetski::create([
        'brand' => 'Sea-Doo',
        'model' => 'GTR 230',
        'horse_power' => '230',
        'year' => '2023', 
        'price'=>'120',
        'price_id' => 'price_1MpxLAK47KXog234MSW2V6J8'
     
    ]);  ModelsJetski::create([
        'brand' => 'Sea-Doo',
        'model' => 'RXT-X RS 300',
        'horse_power' => '300',
        'year' => '2022', 
        'price'=>'120',
        'price_id' => 'price_1MpxLAK47KXog234MSW2V6J8'
     
    ]);
    }
}
