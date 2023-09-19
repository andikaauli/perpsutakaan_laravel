<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Penerbit;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penerbit = ['none', 'gramedia', 'erlangga'];

        foreach ($penerbit as $key => $value) {
            Penerbit::create([
                'nama' => $value,
                'slug' => str::slug($value)
            ]);
        }

    }
}
