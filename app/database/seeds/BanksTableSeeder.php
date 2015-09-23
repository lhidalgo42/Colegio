<?php


class BanksTableSeeder extends Seeder {

	public function run()
	{
			Bank::create([
				'name' => 'Banco de Chile',
				'sbif' => '001'
			]);
		Bank::create([
			'name' => 'Banco Internacional',
			'sbif' => '009'
		]);
		Bank::create([
			'name' => 'Scotiabank Chile',
			'sbif' => '014'
		]);
		Bank::create([
			'name' => 'BCI',
			'sbif' => '016'
		]);
		Bank::create([
			'name' => 'Corpbanca',
			'sbif' => '027'
		]);
		Bank::create([
			'name' => 'Banco Bice',
			'sbif' => '028'
		]);
		Bank::create([
			'name' => 'HSBC Bank (Chile)',
			'sbif' => '031'
		]);
		Bank::create([
			'name' => 'Banco Santander-Chile',
			'sbif' => '037'
		]);
		Bank::create([
			'name' => 'Banco Itaú Chile',
			'sbif' => '039'
		]);
		Bank::create([
			'name' => 'Banco Security',
			'sbif' => '049'
		]);
		Bank::create([
			'name' => 'Banco Falabella',
			'sbif' => '051'
		]);
		Bank::create([
			'name' => 'Deutsche Bank (Chile)',
			'sbif' => '052'
		]);
		Bank::create([
			'name' => 'Banco Ripley',
			'sbif' => '053'
		]);
		Bank::create([
			'name' => 'Rabobank Chile',
			'sbif' => '054'
		]);
		Bank::create([
			'name' => 'Banco Consorcio',
			'sbif' => '055'
		]);
		Bank::create([
			'name' => 'Banco Penta',
			'sbif' => '056'
		]);
		Bank::create([
			'name' => 'Banco Paris',
			'sbif' => '057'
		]);
		Bank::create([
			'name' => 'BBVA',
			'sbif' => '504'
		]);
		Bank::create([
			'name' => 'Banco BTG Pactual Chile',
			'sbif' => '059'
		]);
		Bank::create([
			'name' => 'Banco del Estado de Chile',
			'sbif' => '012'
		]);
		Bank::create([
			'name' => 'Banco do Brasil S.A.',
			'sbif' => '017'
		]);
		Bank::create([
			'name' => 'JP Morgan Chase Bank, N.A.',
			'sbif' => '041'
		]);
		Bank::create([
			'name' => 'Banco de la Nación Argentina',
			'sbif' => '043'
		]);
		Bank::create([
			'name' => 'The Bank of Tokyo-Mitsubishi UFJ, Ltd.',
			'sbif' => '045'
		]);

	}

}
