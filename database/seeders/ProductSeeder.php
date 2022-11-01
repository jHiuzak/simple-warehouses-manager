<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')
        ->insert([
            'product_measurement_unit_id' => '1',
            'product' => 'Arroz Urbano 1Kg',
            'control_code' => 'p001'
        ]);

        DB::table('products')
        ->insert([
            'product_measurement_unit_id' => '1',
            'product' => 'Feijão Marajoara 1Kg',
            'control_code' => 'p002'
        ]);
    }
}
