<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'MGBS0025',
                'nama_barang' => 'MiniGold Black Series 0,025',
                'harga_barang'=> 45000,
                'deskripsi_barang' => 'baik, mantap',
                'satuan_barang' => 1
            ],
            [
                'kode_barang' => 'MGBS005',
                'nama_barang' => 'MiniGold Black Series 0,05',
                'harga_barang'=> 75000,
                'deskripsi_barang' => 'baik, mantap',
                'satuan_barang' => 5
            ],
            [
                'kode_barang' => 'MGBS01',
                'nama_barang' => 'MiniGold Black Series 0,1',
                'harga_barang'=> 75000,
                'deskripsi_barang' => 'baik, mantap',
                'satuan_barang' => 3
            ],
        ]);
    }
}
