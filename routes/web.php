<?php
use App\Models\Catagory;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\Controllers\CatagoryController;
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
Route::get('/product/register',[ProductController::class,'register'])->name('product/register');
Route::post('product.register',[ProductController::class,'store'])->name('product/register');
//Route::get('/product/register',[ProductController::class,'register'])->name('Category/register');
//Route::post('product.register',[ProductController::class,'store'])->name('Category/register');
Route::get('/Catagory/register', [CatagoryController::class, 'register'])->name('Catagory/register');
Route::post('/Catagory/register', [CatagoryController::class, 'store'])->name('Catagory/register');
Route::get('/Catagory/get_all', [CatagoryController::class, 'get_all'])->name('Catagory/get_all');
Route::get('/Catagory/get_by_id/{id}', [CatagoryController::class, 'get_by_id']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/product/list', [ProductController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit']); 
Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
Route::get('/product/get_by_id/{id}', [ProductController::class, 'get_by_id']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
