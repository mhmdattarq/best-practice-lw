<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    /** @use HasFactory<\Database\Factories\JurusanFactory> */
    use HasFactory;
    protected $guarded = [];
    protected $table = 'jurusans';

    protected $fillable = [
        'nama_jurusan',
        'deskripsi',
    ];
}