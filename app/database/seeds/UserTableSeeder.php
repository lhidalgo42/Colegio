<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'rut' => '185415562',
            'name' => 'Leonardo',
            'last_name' => 'Hidalgo',
            'email' => 'leontuna@gmail.com',
            'password' => 123,
            'phone' => '+56979496212',
            'roles_id' => 1
        ]);

    }
}