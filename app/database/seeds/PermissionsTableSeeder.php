<?php


class PermissionsTableSeeder extends Seeder {

	public function run()
	{
		Permission::create([
			'name' => 'Matriculas'
		]);
		Permission::create([
			'name' => 'Reportes'
		]);
		Permission::create([
			'name' => 'Contabilidad'
		]);
	}

}