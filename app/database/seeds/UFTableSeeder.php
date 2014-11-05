<?php

class UFTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'value' => '24.358,21',
            'date' => '2014-11-05'
        ]);

    }
}