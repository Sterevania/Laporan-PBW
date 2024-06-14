<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ecommerce_601Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<100;$i++){
        DB::table('ecommerce_601')->insert([
        'pengguna' => $faker->sentence(1),
        'produk' => $faker->sentence(1),
        'kategori' => $faker->sentence(1),
        'pesanan' => $faker->sentence(1),
        'transaksi_pembayaran' => $faker->sentence(1),
        ]);
        }
    }
}
