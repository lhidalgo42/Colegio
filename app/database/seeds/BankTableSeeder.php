<?php

class BankTableSeeder extends Seeder {

    public function run()
    {
        Bank::create([
            'name' => 'Banco de Chile',
            'SBIF' => '001',
        ]);
        Bank::create([
            'name' => 'Banco Internacional',
            'SBIF' => '009',
        ]);
        Bank::create([
            'name' => 'Scotibank Chile',
            'SBIF' => '014',
        ]);
        Bank::create([
            'name' => 'Banco de Credito e Inversiones',
            'SBIF' => '016',
        ]);
        Bank::create([
            'name' => 'Corpbanca',
            'SBIF' => '027',
        ]);
        Bank::create([
            'name' => 'Banco Bice',
            'SBIF' => '028',
        ]);
        Bank::create([
            'name' => 'HSBC BANK (Chile)',
            'SBIF' => '031',
        ]);
        Bank::create([
            'name' => 'Banco Santander',
            'SBIF' => '037',
        ]);
        Bank::create([
            'name' => 'Banco Itaú Chile',
            'SBIF' => '039',
        ]);
        Bank::create([
            'name' => 'Banco Security',
            'SBIF' => '049',
        ]);
        Bank::create([
            'name' => 'Banco Falabella',
            'SBIF' => '051',
        ]);
        Bank::create([
            'name' => 'DEUTSCHE BANK (Chile)',
            'SBIF' => '052',
        ]);
        Bank::create([
            'name' => 'Banco Ripley',
            'SBIF' => '053',
        ]);
        Bank::create([
            'name' => 'RABOBANK (ex HNS BANCO)',
            'SBIF' => '054',
        ]);
        Bank::create([
            'name' => 'Banco Consorcio (ex Banco Monex)',
            'SBIF' => '055',
        ]);
        Bank::create([
            'name' => 'Banco Penta',
            'SBIF' => '056',
        ]);
        Bank::create([
            'name' => 'Banco Paris',
            'SBIF' => '057',
        ]);
        Bank::create([
            'name' => 'Banco Bilbao Vizcaya Argentaria, Chile (BBVA)',
            'SBIF' => '504',
        ]);

        Bank::create([
            'name' => 'Banco DO Brasil S.A',
            'SBIF' => '017',
        ]);
        Bank::create([
            'name' => 'JP Morgan Chase Bank, N.A',
            'SBIF' => '41',
        ]);
        Bank::create([
            'name' => 'Banco de la Argentina ',
            'SBIF' => '43',
        ]);
        Bank::create([
            'name' => 'The Bank of TOKYO-MITSUBISHI UFJ,LTD',
            'SBIF' => '45',
        ]);
    }
}