<?php
use App\Http\Controllers\ttasinhviencontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tta-list',[ttasinhviencontroller::class,'ttalist'])->name('ttaSinhVien.list');
Route::get('/tta-insert',[ttasinhviencontroller::class,'ttainsert'])->name('ttaSinhVien.insert');
Route::post('/tta-insert',[ttasinhviencontroller::class,'ttainsertsubmit'])->name('ttaSinhVien.insertsubmit');