<?php
  use App\Http\Controllers\UserController;
  use App\Http\Controllers\adminController;
  use App\Http\Controllers\DmController;
  use App\Http\Controllers\indexController;
  use Illuminate\Support\Facades\Route;
  use App\Http\Controllers\TinController;
  use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('client.page.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/', [indexController::class, 'index']);
// Route::get('/', [indexController::class, 'user_dm']);
Route::get('/danhmuc/{id}', [indexController::class, 'ttdm']);
Route::get('/danhmuc/chitiettin/{id}', [indexController::class, 'cttin'])->name('cttin');




Route::get('/admin1', [adminController::class, 'admin']);

Route::get('/themtin', [TinController::class, 'them']);
Route::post('/themtin', [TinController::class, 'them_']);

//tin
Route::get('/admin1/danhsachtin', [TinController::class, 'index']);
Route::get('/admin1/danhsachtin/xoa/{id}', [TinController::class, 'xoa'])->name('xoa');
Route::get('/admin1/danhsachtin/capnhat/{id}', [TinController::class, 'capnhat'])->name('capnhat');
Route::put('/admin1/danhsachtin/capnhat/{id}', [TinController::class, 'capnhat_'])->name('capnhat');
//danh muc
Route::get('/admin1/danhmuc', [DmController::class, 'danhmuc']);
Route::get('/admin1/danhmuc/them', [DmController::class, 'them']);
Route::post('/admin1/danhmuc/them', [DmController::class, 'them_']);
Route::get('/admin1/danhmuc/xoa/{id}', [DmController::class, 'xoa_dm'])->name('xoa_dm');
Route::get('/admin1/danhmuc/capnhat/{id}', [DmController::class, 'capnhat_dm'])->name('capnhat_dm');
Route::put('/admin1/danhmuc/capnhat/{id}', [DmController::class, 'capnhat_dm_'])->name('capnhat_dm_');








