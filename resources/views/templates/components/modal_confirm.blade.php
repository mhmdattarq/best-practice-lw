<?php

use Livewire\Component;
use Livewire\Attributes\On;

new class extends Component {
    // inisiasi dulu data nya dengan aray kosong
    public $data = [];

    // ini untuk ngehook ke livewire Jurusan Data
    #[On('modal-confirm-setDeleteId')]
    public function setDeleteId($data)
    {
        $this->data = $data;
    }

    //ini ketriger dari button wire click proses untuk ngehook ke Jurusan delete
    public function proses($id)
    {
        $dtHook = ['id' => $id]; // id yang di kirim oleh Jurusan data
        $this->dispatch($this->data['dispatch'], $dtHook); // string dispatch itu di ambil dari Jurusan data
    }
};
?>

<div>
    <div class="col-lg-4 col-md-6">
        <!-- Modal -->
        <div class="modal fade" id="modalConfirm" tabindex="-1" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">{{ $data['title'] ?? null }}</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>{{ $data['msg'] ?? null }}</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-danger" data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button type="button" class="btn btn-success" wire:click="proses({{ $data['id'] ?? null }})">Iya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
