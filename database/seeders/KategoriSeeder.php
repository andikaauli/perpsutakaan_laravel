<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $kategori = ['none','novel', 'sejarah', 'religi', 'biografi', 'komik'];

        foreach ($kategori as $key => $value) {
            Kategori::create([
                'name' => $value,
                'slug' => str::slug($value)
            ]);

        }

    }
}
