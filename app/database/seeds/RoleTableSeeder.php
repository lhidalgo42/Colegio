<?php

class RoleTableSeeder extends Seeder {

    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Administrador del sistema'
        ]);
        Role::create([
            'name' => 'Contabilidad',
            'description' => 'Acceso a Contabilidad'
        ]);
        Role::create([
            'name' => 'Matriculas',
            'description' => 'Acceso a Metricular'
        ]);
        Role::create([
            'name' => 'Contador y Matriculas',
            'description' => 'Acceso a Matriculas y Contabilidad'
        ]);

    }
}