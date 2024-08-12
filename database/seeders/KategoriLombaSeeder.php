<?php

namespace Database\Seeders;

use App\Models\CategoryLomba;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriLombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriLombas = ['Ibu-Ibu', 'Bapak-Bapak', 'Anak-Anak'];

        foreach ($kategoriLombas as $kategori) {
            CategoryLomba::create(['name' => $kategori]);
        }
    }
}
