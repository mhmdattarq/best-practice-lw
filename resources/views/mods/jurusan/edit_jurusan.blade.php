<div>
    <div class="col-xxl">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Tambah Data Jurusan</h5>
            </div>
            <div class="card-body">
                <livewire:alert />
                <form wire:submit="formUpdate">
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="nama_jurusan">Nama Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('form.nama_jurusan') is-invalid @enderror" id="nama_jurusan" placeholder="Masukkan Nama Jurusan" wire:model="form.nama_jurusan" />
                            @error('form.nama_jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('form.deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan Deskripsi" wire:model="form.deskripsi" />
                            @error('form.deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning">Update Data Jurusan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
