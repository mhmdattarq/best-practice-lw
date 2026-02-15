<?php

namespace App\Livewire\Jurusan;

use App\Repositories\JurusanRepo;
use Livewire\Component;
use Livewire\Attributes\On;

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

    #[On('DataJurusan_fallbackDelete')]
    public function fallbackDelete($status)
    {
        if ($status == 'success') {
            $msg = "Data jurusan berhasil Di hapus.";
        } else {
            $msg = "Data jurusan gagal Di hapus.";
        }
        $this->dispatch(
            'alert-show',
            type: $status,
            msg: $msg,
        );
    }

    #[On('DataJurusan_fallbackUpdate')]
    public function fallbackUpdate($status)
    {
        if ($status == 'success') {
            $msg = "Data jurusan berhasil Di Update.";
        } else {
            $msg = "Data jurusan gagal Di Update.";
        }
        $this->dispatch(
            'alert-show',
            type: $status,
            msg: $msg,
        );
    }

    public function render()
    {
        return view('mods.jurusan.data_jurusan');
    }
}