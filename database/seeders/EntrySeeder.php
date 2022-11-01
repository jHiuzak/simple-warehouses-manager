<?php

namespace Database\Seeders;

use App\Models\Entry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entry::create([
            'move_status_id' => '1',
            'control_code' => 'e001',
        ]);

        Entry::create([
            'move_status_id' => '2',
            'control_code' => 'e002',
        ]);
    }
}
