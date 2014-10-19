<?php

class FamilyTableSeeder extends Seeder {

    public function run()
    {
        Family::create([
            'name' => 'Hidalgo',
            'last_name' => 'Sepulveda',
        ]);

    }
}