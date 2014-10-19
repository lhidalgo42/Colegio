<?php

class RoleTableSeeder extends Seeder {

    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Administrador del sistema'
        ]);

    }
}