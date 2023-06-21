<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    // $user = Auth::user();
    // if ($user->isAdmin()) {
    //     echo "admin";
    // } else {
    //     echo "notAdmin";
    // }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin/user/roles', function () {
//     return "eh";
// })->middleware(['role']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
