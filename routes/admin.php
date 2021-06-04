<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

Route::get('', [InicioController::class, 'index'])->name('inicio.index');
Route::post('all', [InicioController::class, 'all'])->name('inicio.all');

Route::get('medicamentos', [MedicamentoController::class, 'index'])->name('admin.index');
Route::get('medicamentos/create', [MedicamentoController::class, 'create'])->name('admin.create');
Route::post('medicamentos/all', [MedicamentoController::class, 'all'])->name('medicamentos.all');
Route::post('medicamentos/infoedit', [MedicamentoController::class, 'infoedit']);
Route::post('medicamentos/delmedic', [MedicamentoController::class, 'delmedic']);
Route::post('medicamentos/update', [MedicamentoController::class, 'update'])->name('medicamentos.update');
Route::post('medicamentos/store', [MedicamentoController::class, 'store'])->name('medicamentos.store');
Route::post('medicamentos/medPrice', [MedicamentoController::class, 'medPrice'])->name('medicamentos.medPrice');

Route::post('clientes/store', [ClienteController::class, 'store'])->name('clientes.store');

Route::post('detail/store',[DetailController::class,'store'])->name('detail.store');
Route::post('detail/update',[DetailController::class,'update'])->name('detail.update');
Route::delete('detail/destroy/{id}', [DetailController::class, 'destroy'])->name('detail.destroy');

Route::get('ventas', [VentaController::class, 'index'])->name('ventas.index');
Route::post('ventas/create', [VentaController::class, 'create'])->name('ventas.create');
Route::get('ventas/invoice/{id}', [VentaController::class, 'invoice'])->name('ventas.invoice');
Route::get('ventas/{id}', [VentaController::class, 'show'])->name('ventas.show');

Route::get('reportes', [ReporteController::class, 'index'])->name('reportes.index');
Route::get('reportes/top', [ReporteController::class, 'top'])->name('reportes.top');
Route::get('reportes/bot', [ReporteController::class, 'bot'])->name('reportes.bot');
Route::get('reportes/ven', [ReporteController::class, 'ven'])->name('reportes.ven');

Route::get('stock', [StockController::class, 'index'])->name('stock.index');
Route::get('stock/create', [StockController::class, 'create'])->name('stock.create');
Route::post('stock/store', [StockController::class, 'store'])->name('stock.store');
Route::post('stock/all', [StockController::class, 'all'])->name('stock.all');
Route::post('stock/delstock', [StockController::class, 'delstock'])->name('stock.delete');
Route::post('stock/update', [StockController::class, 'update'])->name('stock.update');
Route::post('stock/infoedit', [StockController::class, 'infoedit']);

Route::get('principal', [PrincipalController::class, 'index'])->name('principal.index');
Route::get('principal/editar_1', [PrincipalController::class, 'editar_1'])->name('principal.editar_1');
Route::get('principal/editar_2', [PrincipalController::class, 'editar_2'])->name('principal.editar_2');



