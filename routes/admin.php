<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;



Route::get('medicamentos', [MedicamentoController::class, 'index'])->name('admin.index');
Route::get('medicamentos/create', [MedicamentoController::class, 'create'])->name('admin.create');
Route::post('medicamentos/all', [MedicamentoController::class, 'all'])->name('medicamentos.all');

Route::post('medicamentos/infoedit', [MedicamentoController::class, 'infoedit']);
Route::post('medicamentos/delmedic', [MedicamentoController::class, 'delmedic']);
Route::post('medicamentos/update', [MedicamentoController::class, 'update'])->name('medicamentos.update');
Route::post('medicamentos/store', [MedicamentoController::class, 'store'])->name('medicamentos.store');

Route::get('ventas', [VentaController::class, 'index'])->name('ventas.index');
Route::get('ventas/create', [VentaController::class, 'create'])->name('ventas.create');
Route::get('ventas/invoice', [VentaController::class, 'invoice'])->name('ventas.invoice');
Route::get('reportes', [ReporteController::class, 'index'])->name('reportes.index');
Route::get('reportes/top', [ReporteController::class, 'top'])->name('reportes.top');
Route::get('reportes/bot', [ReporteController::class, 'bot'])->name('reportes.bot');
Route::get('reportes/ven', [ReporteController::class, 'ven'])->name('reportes.ven');

Route::get('stock', [StockController::class, 'index'])->name('stock.index');
Route::get('stock/create', [StockController::class, 'create'])->name('stock.create');
Route::post('stock/store', [StockController::class, 'store'])->name('stock.store');

Route::get('principal', [PrincipalController::class, 'index'])->name('principal.index');
Route::get('principal/editar_1', [PrincipalController::class, 'editar_1'])->name('principal.editar_1');
Route::get('principal/editar_2', [PrincipalController::class, 'editar_2'])->name('principal.editar_2');

Route::get('', [InicioController::class, 'index'])->name('inicio.index');

