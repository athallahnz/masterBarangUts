<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'code' => 'gr',
                'name' => 'gram',
                'description' => 'gram'
            ],
            [
                'code' => 'kg',
                'name' => 'kilogram',
                'description' => 'kilogram'
            ],
        ]);
    }
}
