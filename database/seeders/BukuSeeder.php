<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'bintang',
            'slug' => str::slug('bintang'),
            'penulis' => 'tere liye',
            'sampul' => 'buku/Sampul_novel_Bintang.jpg',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'matahari',
            'slug' => str::slug('matahari'),
            'penulis' => 'tere liye',
            'sampul' => 'buku/Sampul_novel_Matahari.jpg',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'matahari',
            'slug' => str::slug('matahari'),
            'penulis' => 'tere liye',
            'sampul' => 'buku/Sampul_novel_Matahari.jpg',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'matahari',
            'slug' => str::slug('matahari'),
            'penulis' => 'tere liye',
            'sampul' => 'buku/Sampul_novel_Matahari.jpg',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'matahari',
            'slug' => str::slug('matahari'),
            'penulis' => 'tere liye',
            'sampul' => 'buku/Sampul_novel_Matahari.jpg',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'matahari',
            'slug' => str::slug('matahari'),
            'penulis' => 'tere liye',
            'sampul' => 'buku/Sampul_novel_Matahari.jpg',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10,
        ]);

    }
}
