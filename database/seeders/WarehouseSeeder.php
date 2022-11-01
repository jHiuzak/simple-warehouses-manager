<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('products_measurement_units')
        // ->insert([
        //     'product_measurement_unit' => 'pct'
        // ]);

        Warehouse::create([
            'warehouse' => 'Supermercado SuperCop',
            'control_code' => 'x001',
        ]);

        Warehouse::create([
            'warehouse' => 'Supermercado União',
            'control_code' => 'x002',
        ]);

        // ,
        // [
        //     'warehouse' => 'Supermercado União',
        //     'control_code' => 'x002',
        // ]
    }
}
