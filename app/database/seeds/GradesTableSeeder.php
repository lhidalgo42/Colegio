<?php


class GradesTableSeeder extends Seeder {

	public function run()
	{
		Grade::create([
			'name' => 'Kinder',
			'price' => '190000'
		]);
		Grade::create([
			'name' => '1ro Basico',
			'price' => '200000'
		]);
		Grade::create([
			'name' => '2do Basico',
			'price' => '200000'
		]);
		Grade::create([
			'name' => '3ro Basico',
			'price' => '200000'
		]);
		Grade::create([
			'name' => '4to Basico',
			'price' => '200000'
		]);
		Grade::create([
			'name' => '5to Basico',
			'price' => '200000'
		]);
		Grade::create([
			'name' => '6to Basico',
			'price' => '200000'
		]);
		Grade::create([
			'name' => '7mo Basico',
			'price' => '200000'
		]);
		Grade::create([
			'name' => '8vo Basico',
			'price' => '200000'
		]);

	}

}