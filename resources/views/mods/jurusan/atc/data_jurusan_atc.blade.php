@section('css')
    <link href="{{ asset('assets/vendor/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/vendor/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('js')
    <script src="{{ asset('assets/vendor/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
@endsection

@push('js-stack')
    <script>
        var dtTable = $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 25,
            dom: 'lrtip',
            order: [
                [0, 'asc']
            ],
            //untuk style dari coloumn
            columnDefs: [
                // { className: 'text-left', targets: [3] },
                // { className: 'text-center text-muted', targets: [4] },
                // { className: 'px-0', targets: [1] },
                // { className: 'text-center', targets: ['_all'] },
            ],
            // mengarah ke route 
            ajax: '{{ route('jurusan.Dt') }}',
            columns: [{
                    data: null,
                    name: 'created_at',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        el = '';
                        el += '<input class="form-check-input" type="checkbox" value="' + data.id + '">';
                        return el;
                    }
                },
                {
                    data: null,
                    name: 'created_at',
                    orderable: true,
                    searchable: true,
                    render: function(data, type, row, meta) {
                        let html = `
                         <div class="btn-group-vertical">
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="icon-base ti tabler-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item text-warning" href="/jurusan/${row.id}/edit"><i class="icon-base ti tabler-pencil me-1"></i>Edit</a>
                                    <a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#modalConfirm" wire:click="hookModalConfirm(${data.id},'${data.nama_jurusan}')">
                                        <i class="icon-base ti tabler-trash me-1"></i>Hapus
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;

                        return html;
                    }
                },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'nama_jurusan',
                    name: 'nama_jurusan',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'deskripsi',
                    name: 'deskripsi',
                    orderable: false,
                    searchable: false
                },
            ],
            initComplete: function(settings) {
                table = settings.oInstance.api();
                initSearchCol(table, '#header-filter', 'search-col-dt');
            }
        });
    </script>
@endpush
