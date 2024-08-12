<?php

namespace Database\Seeders;

use App\Models\CategoryLomba;
use App\Models\Lomba;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lombas = [
            ['name' => 'Lomba Masak', 'category_lomba_id' => CategoryLomba::where('name', 'Ibu-Ibu')->first()->id, 'price' => 0],
            ['name' => 'Lomba Sepak Bola', 'category_lomba_id' => CategoryLomba::where('name', 'Bapak-Bapak')->first()->id, 'price' => 0],
            ['name' => 'Lomba Mewarnai', 'category_lomba_id' => CategoryLomba::where('name', 'Anak-Anak')->first()->id, 'price' => 0],
        ];
    
        foreach ($lombas as $lomba) {
            Lomba::create($lomba);
        }
    }
}
