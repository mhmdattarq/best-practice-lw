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
            $this->dispatch('DataJurusan_fallbackDelete', status: 'success');
        } else {
            $this->dispatch('DataJurusan_fallbackDelete', status: 'danger');
        }
    }

    public function render()
    {
        return "<div></div>";
    }
}