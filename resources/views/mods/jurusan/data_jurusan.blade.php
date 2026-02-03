<div>
    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            Data Jurusan
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">
                Tambah Jurusan
            </button>
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
                        <td>1</td>
                        <td>Teknik Informatika</td>
                        <td>kdjflsjfksjflsjfsjflsjsjfkjsjsklfjssJ</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap Table with Header - Light -->
    <!-- Edit User Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Tambah Jurusan Baru</h4>
                        <p>Silahkan Masukkan Nama Jurusan baru dan Deskripsi Jurusan Baru</p>
                    </div>
                    <form id="editUserForm" class="row g-6" onsubmit="return false">
                        <div class="col-12">
                            <label class="form-label" for="nama_jurusan">Nama Jurusan</label>
                            <input type="text" id="nama_jurusan" name="nama_jurusan" class="form-control"
                                placeholder="Masukkan Nama jurusan Baru" />
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="deskripsi">Deskripsi Jurusan</label>
                            <input type="text" id="deskripsi" name="deskripsi" class="form-control"
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
    </div>
    <!--/ Edit User Modal -->
</div>
