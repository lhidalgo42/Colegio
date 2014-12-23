<?php

class ClinicTableSeeder extends Seeder {

    public function run()
    {
        Clinic::create([
            'name' => 'Clinica Alemana',
            'price' => '42000',
        ]);
        Clinic::create([
            'name' => 'Clinica Santa Maria',
            'price' => '42000',
        ]);
        Clinic::create([
            'name' => 'Otra',
            'price' => '42000',
        ]);
        Clinic::create([
            'name' => 'No Aplica',
            'price' => '0',
        ]);
    }
}