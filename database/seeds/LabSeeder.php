<?php

use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lab_laboratorium')->insert(
        	['laboratorium'   		=> 'Laboratorium Kalibrasi LPFFK Banjarbaru']
        );
    }
}
