<?php

namespace App\Livewire\Jurusan;

use App\Repositories\JurusanRepo;
use Livewire\Component;

class DataJurusan extends Component
{
    public $dt = [];

    public function mount()
    {
        $this->dt['jurusan'] = JurusanRepo::getAll(); // ini di ambil dari Provinsi Repo
    }

    public $data;

    public function render()
    {
        return view('mods.jurusan.data_jurusan');
    }
}