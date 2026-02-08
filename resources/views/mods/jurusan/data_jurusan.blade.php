<div>
    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            Data Jurusan
        </h5>
        <div class="card-body">
            <table id="myTable" class="datatables-basic table">
                <thead>
                    <tr>
                        <th style="width: 5px">Check</th>
                        <th style="width: 5px"></th>
                        <th style="width: 5px">No</th>
                        <th style="width: 5px">Nama Jurusan</th>
                        <th style="width: 5px">Deskripsi Jurusan</th>
                    </tr>
                </thead>
                <thead id="header-filter">
                    <tr>
                        <th class="text-left">
                            <input type="checkbox" class="form-check-input check-data-all">
                        </th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                        <th class="text-center">
                            <input type="text" class="form-control form-control-sm text-left search-col-dt">
                        </th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0"></tbody>
            </table>
        </div>
    </div>
    @include('mods.jurusan.atc.data_jurusan_atc')
</div>
