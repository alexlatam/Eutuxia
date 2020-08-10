<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
        	'section' => 'productos',
        ]);

        DB::table('sections')->insert([
        	'section' => 'servicios',
        ]);

        DB::table('sections')->insert([
        	'section' => 'proyectos',
        ]);
    }
}
