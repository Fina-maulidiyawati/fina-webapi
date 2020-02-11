<?php

use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Student::create([
        	'nama' => 'wawat',
        	'jk' => 'P'
        ]);
        \App\Student::create([
        	'nama' => 'maman',
        	'jk' => 'L'
        ]);    }
}
