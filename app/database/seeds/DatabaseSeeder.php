<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('FamilyTableSeeder');
        $this->call('ParentTableSeeder');
        $this->call('ChildrenTableSeeder');
        $this->call('BankTableSeeder');
        $this->call('PaymentTableSeeder');
        $this->call('UFTableSeeder');
        $this->call('GradesTableSeeder');
	}

}
