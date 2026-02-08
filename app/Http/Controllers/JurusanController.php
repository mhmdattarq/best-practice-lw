<?php

namespace App\Http\Controllers;

use App\Repositories\JurusanRepo;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class JurusanController extends Controller
{
    public function dataDt()
    {
        $data = JurusanRepo::getAllDt(); // ini untuk mengambil data dari repo
        return DataTables::of($data)->toJson(); // data ini di kirim ke datatable dalam bentuk json
    }
}
