<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\division::class,50)->create();

 /*     Creas solo 1 division  
         DB::table('divisions')->insert([
            'nombre' => Str::random(10),
            'embajador'=>Str::random(15) 
        ]);
 */
        /* $arrays = range(0,20);
        foreach ($arrays as $valor) {
          DB::table('divisions')->insert([	            
            'nombre' => Str::random(10),
            'embajador'=>Str::random(15),
            'integrantes' =>3,
            'nivel' =>1
            
          ]);
        } */
    }
}
