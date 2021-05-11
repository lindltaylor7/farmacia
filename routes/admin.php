<?php

use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;


Route::get('', [MedicamentoController::class, 'index'])->name('admin.index');
Route::get('medicamentos/create', [MedicamentoController::class, 'create'])->name('admin.create');
Route::get('ventas', [VentaController::class, 'index'])->name('ventas.index');
Route::get('ventas/create', [VentaController::class, 'create'])->name('ventas.create');
Route::get('ventas/invoice', [VentaController::class, 'invoice'])->name('ventas.invoice');
Route::get('reportes', [ReporteController::class, 'index'])->name('reportes.index');
Route::get('reportes/top', [ReporteController::class, 'top'])->name('reportes.top');
Route::get('reportes/bot', [ReporteController::class, 'bot'])->name('reportes.bot');
Route::get('reportes/ven', [ReporteController::class, 'ven'])->name('reportes.ven');
