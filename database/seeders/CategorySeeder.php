<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            ['nama_kategori' => 'Konser'],
            ['nama_kategori' => 'Seminar'],
            ['nama_kategori' => 'Workshop'],
        ];

        foreach ($kategoris as $kategori) {
            // firstOrCreate: Cari dulu datanya, kalau tidak ada baru buat
            Kategori::firstOrCreate(
                ['nama' => $kategori['nama_kategori']]
            );
        }
    }
}
