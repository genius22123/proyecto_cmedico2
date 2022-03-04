<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ClientesHome;
use App\Http\Livewire\Ventas\VentasIndex;
use App\Http\Livewire\Servicios\ServiciosIndex;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Controllers\ventas\VentasPreview;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('clientes',ClientesHome::class)->name('clientes.index');
Route::get('servicios',ServiciosIndex::class)->name('servicios.index');

Route::get('ventas/index',VentasIndex::class)->name('ventas.index');
Route::get('ventas/crear',VentasCreate::class)->name('ventas.create');

Route::get('ventas/{venta}/preview',[VentasPreview::class,'preview'])->name('ventas.preview');
Route::get('ventas/preview/{venta}/pdf',[VentasPreview::class,'pdf'])->name('ventas.preview.pdf');



Route::get('prueba',function(){
    \Cart::destroy();
});