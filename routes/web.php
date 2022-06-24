<?php

use App\Models\Ebook;
use App\Imports\EbookImport;
use App\Models\Katalog_ebook;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubkriteriaController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImportController;


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

Route::resource('/', LoginController::class);

Route::resource('/home', HomeController::class);
Route::get('/admin', function () {
    return view('admin/admin', [
        "title" => "Admin"
    ]);
});
// Route::resource('/user', UserController::class);
// Route::resource('/create', UserController::class);
// Route::resource('/show', UserController::class);
// Route::resource('/edit', UserController::class);
Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/createuser', [UserController::class, 'create'])->name('users.create');
Route::get('/kriteria', [KriteriaController::class, 'index'])->name('users.index');
Route::get('/createkriteria', [KriteriaController::class, 'create'])->name('users.create');
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('users.index');
Route::get('/createalternatif', [AlternatifController::class, 'create'])->name('users.create');
Route::get('/subkriteria', [SubkriteriaController::class, 'create'])->name('users.create');
// Route::get('/create', [UserController::class, 'create']);
// Route::get('/show/{id}', [UserController::class, 'show']);
// Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::get('/edit/{id?}', [UserController::class, 'edit'])->name('users.edit');
// Route::get('/ebook', function () {
//     return view('ebook/ebook', [
//         "title" => "Ebook",
//         'ebook' => App\Models\Ebook::all()
//     ]);
// });
Route::get('/katalog', function () {
    return view('ebook/katalog', [
        "title" => "Katalog Ebook",
        'ebook' => App\Models\Katalog_ebook::all()
    ]);
});
Route::get('/editpwd', function () {
    return view('admin/editpwd', [
        "title" => "Edit Password"
    ]);
});
Route::resource('/import', ImportController::class);
// Route::post('import', function () {
//     Excel::import(new EbookImport, request()->file('file'));
//     return redirect()->back()->with('success', 'Data Berhasil Disimpan');
// });
Route::resource('/ebook', EbookController::class);
// {{ url('admin/'.$value->id.'/edit')}}