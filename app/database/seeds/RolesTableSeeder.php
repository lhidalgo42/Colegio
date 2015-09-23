<?php


class RolesTableSeeder extends Seeder {

	public function run()
	{
		foreach(range(1, 3) as $index)
		{
			Role::create([
				'users_id' => 1,
				'permissions_id' => $index
			]);
		}
	}

}