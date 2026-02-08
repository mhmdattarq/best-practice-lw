<?php

namespace App\Repositories;

use App\Models\Jurusan;
use Illuminate\Support\Facades\Log;

class JurusanRepo
{
    public static function getAllDt()
    {
        return Jurusan::all();
    }
}
