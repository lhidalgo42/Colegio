<?php

class ParentTableSeeder extends Seeder {

    public function run()
    {
        Parents::create([
            'families_id' => 1,
            'rut' => '10444380-k',
            'economic_support' => true,
            'name' => 'Monica',
            'last_name' => 'Sepulveda',
            'last_name2' => 'Salas',
            'born_date' => '1964-2-6',
            'sex' => 'Mujer',
            'profession' => 'Contable',
            'address' => 'El Parron 4512',
            'commune_id' => 39,
            'email' => 'monica.sepulveda@isaprefundacion.cl',
            'work_place' => ' Isapre Fundacion del Bancoestado',
            'work_address' => 'Avenida Siempre Viva 742',
            'phones' => '79496212,22844255'
        ]);
        Parents::create([
            'families_id' => 1,
            'rut' => '8008048-4',
            'economic_support' => false,
            'name' => 'Hector',
            'last_name' => 'Hidalgo',
            'last_name2' => 'Salas',
            'born_date' => '1959-6-21',
            'sex' => 'Hombre',
            'profession' => 'Informatico',
            'address' => 'El Parron 4512',
            'commune_id' => 39,
            'email' => 'hhidalgo@edithor.cl',
            'work_place' => 'Independiente',
            'phones' => '99376052,22844255'
        ]);
    }
}