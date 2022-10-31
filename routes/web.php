<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\ProductMeasurementUnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseProductController;
use App\Http\Controllers\MoveStatusController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\EntryProductController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\OutputProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('almoxarifado', WarehouseController::class)
    ->names('warehouse')
    ->parameters(['almoxarifado' => 'warehouse']);

Route::resource('produto/unidade-medida', ProductMeasurementUnitController::class)
->names('product.measurementUnit')
->parameters(['produto/unidade-medida' => 'produto\measurement-unit']);

Route::resource('produto', ProductController::class)
->names('product')
->parameters(['produto' => 'product']);

Route::resource('almoxarifado/produto', WarehouseProductController::class)
    ->names('warehouse.product')
    ->parameters(['almoxarifado/produto' => 'warehouse/product']);

Route::resource('entrada', EntryController::class)
->names('entry')
->parameters(['entrada' => 'entry']);

Route::resource('entrada/produto', EntryProductController::class)
->names('entry.product')
->parameters(['entry/product' => 'entry.product']);

Route::resource('saida', OutputProductController::class)
->names('output')
->parameters(['saida' => 'output']);


Route::resource('saida/produto', OutputProductController::class)
->names('output.product')
->parameters(['saida/produto' => 'output/product']);
