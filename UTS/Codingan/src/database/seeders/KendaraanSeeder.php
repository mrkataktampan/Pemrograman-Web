<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Kendaraan::create([
        'nama' => 'Toyota Avanza',
        'merk' => 'Toyota',
        'tipe' => 'MPV',
        'tahun' => 2022,
        'warna' => 'Putih',
        'harga' => 250000000,
        'stok' => 3,
        'deskripsi' => 'Mobil keluarga yang irit dan nyaman',
    ]);
    }
}
