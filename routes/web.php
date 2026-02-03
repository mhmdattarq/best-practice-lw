<?php

use App\Livewire\Dashboard\DashboardIndex;
use App\Livewire\Jurusan\DataJurusan;
use App\Livewire\Jurusan\TambahJurusan;
use Illuminate\Support\Facades\Route;


Route::livewire('/', DashboardIndex::class)->name('dashboard');
Route::livewire('/data/jurusan', DataJurusan::class)->name('data.jurusan');
Route::livewire('/tambah/jurusan', TambahJurusan::class)->name('tambah.jurusan');