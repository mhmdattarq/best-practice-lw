<?php

namespace App\Repositories;

use App\Models\Jurusan;
use Illuminate\Support\Facades\Log;

class JurusanRepo
{
    public static function getAll()
    {
        return Jurusan::all();
    }
    public static function saveData(array $data): bool
    {
        try {
            Jurusan::create([
                'nama_jurusan' => $data['nama_jurusan'],
                'deskripsi'    => $data['deskripsi'] ?? null,
            ]);

            return true;
        } catch (\Exception $e) {
            Log::error('Gagal simpan jurusan', [
                'data' => $data,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return false;
        }
    }
}