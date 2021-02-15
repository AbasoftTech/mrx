<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get("/", [MainController::class, "index"])->name('home');
Route::get("/about", [MainController::class, "about"])->name("about");
// Route::get("/login", [MainController::class, "login"])->name("login");
// Route::get("/signup", [MainController::class, "signup"])->name("signup");
Route::get("/news", [MainController::class, "news"])->name("news");
Route::get("/services", [MainController::class, "services"])->name("services");
Route::get("/myinfo", [MainController::class, "myinfo"])->name("myinfo");
Route::get("/rieltors", [MainController::class, "rieltors"])->name("rieltors");
Route::get("/rieltorpage", [MainController::class, "rieltorpage"])->name("rieltorpage");
Route::get("/addcontract", [MainController::class, "addcontract"])->name("addcontract");
Route::get("/contractresult", [MainController::class, "contractresult"])->name("contractresult");
Route::get("/contact", [MainController::class, "contact"])->name("contact");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
