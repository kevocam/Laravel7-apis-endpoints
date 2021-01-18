<?php

use Illuminate\Database\Seeder;

class SubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\subdivision::class,50)->create();
    }
}
