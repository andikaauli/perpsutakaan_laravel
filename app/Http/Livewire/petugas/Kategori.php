<?php

namespace App\Http\Livewire\Petugas;

use App\Models\Kategori as ModelsKategori;
use App\Models\Rak;
use App\Models\Buku;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Kategori extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $create, $edit, $delete, $nama, $kategori_id;

    protected $rules = [
        'nama' => 'required|min:5',
    ];

    public function create()
    {
        $this->format();
        $this->create = true;
    }

    public function store()
    {
        $this->validate();

        ModelsKategori::create([
            'name' => $this->nama,
            'slug' => str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Data berhasil ditambahkan');

        $this->format();
    }

    public function edit(ModelsKategori $kategori)
    {
        $this->format();

        $this->edit = true;
        $this->nama = $kategori->name;
        $this->kategori_id = $kategori->id;
    }

    public function update(ModelsKategori $kategori)
    {
        // dd($kategori);
        $this->validate();

        $kategori->update([
            'name'=> $this->nama,
            'slug'=> Str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Data berhasil diubah');

        $this->format();
    }

    public function delete($id)
    {
        $this->format();

        $this->delete = true;
        $this->ketegori_id = $id;
    }

    public function destroy(ModelsKategori $kategori)
    {
        // dd($kategori);
        // $kategori->rak()->delete();
        $buku = Buku::where('kategori_id', $kategori->id)->get();
        foreach ($buku as $key => $value) {
            $value->update([
                'kategori_id' => 1
            ]);
        }

        $rak = Rak::where('kategori_id', $kategori->id)->get();
        foreach ($rak as $key => $value) {
            $value->update([
                'kategori_id' => 1
            ]);
            // dump($value);
        }
        $kategori->delete();

        session()->flash('sukses', 'Data berhasil dihapus');

        $this->format();
    }

    public function render()
    {

        return view('livewire.kategori', [
            'kategori' => ModelsKategori::latest()->paginate(3)
        ]);
    }

    public function format()
    {
        unset($this->nama);
        unset($this->kategori_id);
        unset($this->create);
        unset($this->edit);
        unset($this->delete);
    }

}
