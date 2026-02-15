<?php

namespace App\Livewire\Jurusan;

use App\Models\jurusan;
use App\Repositories\JurusanRepo;
use Livewire\Component;

class EditJurusan extends Component
{
    public $jurusanId;
    public $form = [];

    public function mount($id)
    {
        $data = jurusan::findOrFail($id);

        $this->jurusanId = $data->id;

        $this->form = [
            'nama_jurusan' => $data->nama_jurusan,
            'deskripsi'    => $data->deskripsi,
        ];
    }
    public function rules()
    {
        return [
            'form.nama_jurusan' =>
            'required|unique:jurusans,nama_jurusan,' . $this->jurusanId,
            'form.deskripsi' => 'required|string|max:255',
        ];
    }
    public function formUpdate()
    {
        $this->validate();

        $process = JurusanRepo::update($this->jurusanId, $this->form);

        if ($process) {
            return redirect()->route('jurusan.data');
            $this->dispatch('DataJurusan_fallbackUpdate', status: 'success');
        } else {
            return redirect()->route('jurusan.data');
            $this->dispatch('DataJurusan_fallbackUpdate', status: 'danger');
        }
    }

    public function render()
    {
        return view('mods.jurusan.edit_jurusan');
    }
}