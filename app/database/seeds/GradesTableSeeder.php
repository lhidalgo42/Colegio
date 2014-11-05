<?php

class GradesTableSeeder extends Seeder {

    public function run()
    {
        Grade::create([
        'name' => 'Kinder',
        'matricula' => '200000',
        'escolaridad' => '200000',
        'materiales' => '200000'
    ]);
        Grade::create([
            'name' => '1ro Basico',
            'matricula' => '200000',
            'escolaridad' => '200000',
            'materiales' => '200000'
        ]);
        Grade::create([
            'name' => '2do Basico',
            'matricula' => '200000',
            'escolaridad' => '200000',
            'materiales' => '200000'
        ]);
        Grade::create([
            'name' => '3ro Basico',
            'matricula' => '200000',
            'escolaridad' => '200000',
            'materiales' => '200000'
        ]);
        Grade::create([
            'name' => '4to Basico',
            'matricula' => '200000',
            'escolaridad' => '200000',
            'materiales' => '200000'
        ]);
        Grade::create([
            'name' => '5to Basico',
            'matricula' => '200000',
            'escolaridad' => '200000',
            'materiales' => '200000'
        ]);
        Grade::create([
            'name' => '6to Basico',
            'matricula' => '200000',
            'escolaridad' => '200000',
            'materiales' => '200000'
        ]);
        Grade::create([
            'name' => '7mo Basico',
            'matricula' => '200000',
            'escolaridad' => '200000',
            'materiales' => '200000'
        ]);
        Grade::create([
            'name' => '8vo Basico',
            'matricula' => '200000',
            'escolaridad' => '200000',
            'materiales' => '200000'
        ]);

    }
}