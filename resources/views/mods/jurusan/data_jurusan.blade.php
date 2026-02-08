<div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            Data Jurusan
        </h5>
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No</th>
                        <th>Nama Jurusan</th>
                        <th>Deskripsi Jurusan</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($dt['jurusan'] as $key => $item)
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="icon-base ti tabler-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="icon-base ti tabler-pencil me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="icon-base ti tabler-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item['nama_jurusan'] }}</td>
                            <td>{{ $item['deskripsi'] }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap Table with Header - Light -->
    {{-- <!-- Edit User Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true" wire:ignore>
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Alert error di dalam modal (muncul saat gagal) -->
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Tambah Jurusan Baru</h4>
                        <p>Silahkan Masukkan Nama Jurusan baru dan Deskripsi Jurusan Baru</p>
                    </div>
                    <form wire:submit="simpan" class="row g-6">
                        <div class="col-12">
                            <label class="form-label" for="nama_jurusan">Nama Jurusan</label>
                            <input type="text" id="nama_jurusan" wire:model="form.nama_jurusan"
                                class="form-control @error('form.nama_jurusan') is-invalid @enderror"
                                placeholder="Masukkan Nama jurusan Baru" />
                            @error('form.nama_jurusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="deskripsi">Deskripsi Jurusan</label>
                            <input type="text" id="deskripsi" wire:model="form.deskripsi" class="form-control"
                                placeholder="Masukkan Deskripsi Jurusan" />
                        </div>

                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-success me-3">Simpan</button>
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!--/ Edit User Modal -->
</div>
