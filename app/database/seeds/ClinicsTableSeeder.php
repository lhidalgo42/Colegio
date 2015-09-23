<?php

class ClinicsTableSeeder extends Seeder {

	public function run()
	{
		Clinic::create([
			'name' => 'Clinica Alemana',
			'price' => '42000'
		]);
		Clinic::create([
			'name' => 'Clinica Santa Maria',
			'price' => '39000'
		]);
		Clinic::create([
			'name' => 'OTRA',
			'price' => ''
		]);

	}

}