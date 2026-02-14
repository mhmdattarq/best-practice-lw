<?php

namespace App\Livewire\Jurusan;

use App\Repositories\JurusanRepo;
use Livewire\Component;

class TambahJurusan extends Component
{
    public $form = [
        'nama_jurusan' => '',
        'deskripsi'    => '',
    ];

    public function formSubmit()
    {

        $this->validate();
        $process = JurusanRepo::create($this->form);
        if ($process) {
            $this->dispatch(
                'alert-show',
                type: "success",
                msg: "Data jurusan " . $this->form['nama_jurusan'] . " berhasil disimpan.",
            );
            $this->reset('form');
        } else {
            $this->dispatch(
                'alert-show',
                type: "danger",
                msg: "Proses penambahan data baru gagal, periksa kembali",
            );
        }
    }

    public function rules()
    {
        return [
            'form.nama_jurusan' => 'required|unique:jurusans,nama_jurusan,NULL,id',
            'form.deskripsi' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            "form.nama_jurusan.required" => "Nama jurusan tidak bolehh kosong woii",
            "form.deskripsi.required" => "Deskripsi juga tidak boleh kosong woiii",
        ];
    }

    public $validationAttributes = [
        "form.nama_jurusan" => "Nama Jurusan",
        "form.deskripsi" => "deskripsi",
    ];


    public function render()
    {
        return view('mods.jurusan.tambah_jurusan');
    }
}
