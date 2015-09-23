<?php


class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'name' => 'Leonardo',
			'lastname' => 'Hidalgo',
			'rut' => '18541556-2',
			'email' => 'lhidalgo@alumnos.uai.cl',
			'password' => '123'
		]);

	}

}