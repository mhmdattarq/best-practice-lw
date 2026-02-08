<?php

namespace App\Livewire\Jurusan;

use App\Repositories\JurusanRepo;
use Livewire\Component;

class DataJurusan extends Component
{
    public function render()
    {
        return view('mods.jurusan.data_jurusan');
    }
}