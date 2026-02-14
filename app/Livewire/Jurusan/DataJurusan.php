<?php

namespace App\Livewire\Jurusan;

use App\Repositories\JurusanRepo;
use Livewire\Component;

class DataJurusan extends Component
{
    // ini method hook modal confirm useable
    public function hookModalConfirm($id, $identity)
    {
        // ini isi dari modal confirm
        $dtHook = [
            'id' => $id, // ini akan di kirim ke data modal confirm 
            'title' => "Konfirmasi Hapus",  // ini akan di kirim ke data modal confirm
            'msg' => "Apakan Anda Yakin Menghapus Data " . $identity . " ?",  // ini akan di kirim ke data modal confirm
            'dispatch' => 'DeleteJurusan-delete',  // ini akan di kirim ke data modal confirm
        ];

        // ini bagian yang ngehook ke modal confirm blade tadi
        $this->dispatch('modal-confirm-setDeleteId', $dtHook);
    }

    public function render()
    {
        return view('mods.jurusan.data_jurusan');
    }
}
