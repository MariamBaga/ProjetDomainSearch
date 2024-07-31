<?php

// database/seeders/DomainPriceSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomainPriceSeeder extends Seeder
{
    public function run()
    {
        DB::table('domain_prices')->insert([
            ['name' => 'mobi', 'transfer_price' => 5550, 'register_price' => 15550, 'renew_price' => 25550, 'currency' => 'FCFA'],
            ['name' => 'com', 'transfer_price' => 7750, 'register_price' => 17750, 'renew_price' => 27750, 'currency' => 'FCFA'],
            ['name' => 'net', 'transfer_price' => 10750, 'register_price' => 20750, 'renew_price' => 30750, 'currency' => 'FCFA'],
            ['name' => 'org', 'transfer_price' => 14250, 'register_price' => 24250, 'renew_price' => 44250, 'currency' => 'FCFA'],
            ['name' => 'info', 'transfer_price' => 19950, 'register_price' => 38540, 'renew_price' => 55190, 'currency' => 'FCFA'],
            ['name' => 'co', 'transfer_price' => 12570, 'register_price' => 24450, 'renew_price' => 38230, 'currency' => 'FCFA'],
            ['name' => 'int', 'transfer_price' => 17250, 'register_price' => 27420, 'renew_price' => 37350, 'currency' => 'FCFA'],
            ['name' => 'edu', 'transfer_price' => 9120, 'register_price' => 19720, 'renew_price' => 29450, 'currency' => 'FCFA'],
        ]);
    }
}
