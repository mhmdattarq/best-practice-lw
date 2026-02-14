<?php

namespace App\Livewire\Jurusan;

use App\Repositories\JurusanRepo;
use Livewire\Attributes\On;
use Livewire\Component;

class DeleteJurusan extends Component
{
    #[On('DeleteJurusan-delete')]

    public function delete($data)
    {
        $proses = JurusanRepo::delete($data['id']);
        if ($proses) {
            $this->dispatch('reloadDT', data: 'dtTable');
            $this->dispatch('closeModal', id: 'modalConfirm');
            $this->dispatch('alert', data: ['type' => 'success',  'message' => 'Data baru berhasil ditambahkan.']);
        } else {
            $this->dispatch(
                'alert-show',
                type: "danger",
                msg: "Gagal menghapus data, silahkan hubungi admin.",
            );
        }
    }

    public function render()
    {
        return "<div></div>";
    }
}
