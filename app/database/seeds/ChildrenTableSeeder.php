<?php

class ChildrenTableSeeder extends Seeder {

    public function run()
    {
        Children::create([
        'families_id' => 1,
        'name' => 'Leonardo',
        'last_name' => 'Hidalgo',
        'last_name2' => 'Sepulveda',
        'grades_id' => '8',
        'born_date' => '1993-09-09'
        ]);

        Children::create([
            'families_id' => 1,
            'name' => 'Carolina',
            'last_name' => 'Hidalgo',
            'last_name2' => 'Sepulveda',
            'grades_id' => '7',
            'born_date' => '1997-02-17'
        ]);
    }
}