<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rak;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rak::create([
            'rak' => 0,
            'baris' => 0,
            'kategori_id' => 1,
            'slug' => 0
        ]);

        for ($i=1; $i <= 5; $i++) {
            Rak::create([
                'rak' => 1,
                'baris' => $i,
                'kategori_id' => 3,
                'slug' => 1 . '-' . $i,
            ]);
        }

    }
}
