<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductMeasurementUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_measurement_units')
        ->insert([
            'product_measurement_unit' => 'pct'
        ]);

        DB::table('products_measurement_units')
        ->insert([
            'product_measurement_unit' => 'Kg'
        ]);
    }
}
