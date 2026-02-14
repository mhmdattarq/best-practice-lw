<?php

use App\Http\Controllers\JurusanController;
use App\Livewire\Dashboard\DashboardIndex;
use App\Livewire\Jurusan\DataJurusan;
use App\Livewire\Jurusan\TambahJurusan;
use Illuminate\Support\Facades\Route;


Route::livewire('/', DashboardIndex::class)->name('dashboard');
Route::prefix('jurusan')->group(function () {
    Route::name('jurusan.')->group(function () {
        Route::get('/datatable', [JurusanController::class, 'dataDt'])->name('Dt');
        Route::livewire('/data/jurusan', DataJurusan::class)->name('data');
        Route::livewire('/create', TambahJurusan::class)->name('create');
    });
});
