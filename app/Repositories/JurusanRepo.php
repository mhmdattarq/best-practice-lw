<?php

namespace App\Repositories;

use App\Models\Jurusan;
use Illuminate\Support\Facades\Log;

class JurusanRepo
{
    public static function delete($id)
    {
        try {
            Jurusan::find($id)->delete();
            return true;
        } catch (\Exception $e) {
            Log::error("Delete data tabel jurusans gagal", ['error' => $e->getMessage()]);
            return false;
        }
    }
    public static function create($data)
    {
        try {
            Jurusan::create($data);
            return true;
        } catch (\Exception $e) {
            Log::error("Insert ke tabel jurusans gagal", ['error' => $e->getMessage()]);
            return false;
        }
    }
    public static function update($id, $data)
    {
        return Jurusan::where('id', $id)->update($data);
    }

    public static function getAllDt()
    {
        return Jurusan::all();
    }
}