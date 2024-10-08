<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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

//Route::get('/', function () {
//    return view('layouts.frontend.frontend');
//});

//FrontEnd
Route::get('/', [FrontEndController::class, 'frontend'])->name('layouts.frontend.frontend');
Route::get('/', [FrontEndController::class, 'home'])->name('layouts.frontend.home.index');

Route::get('/account', [FrontEndController::class, 'account'])->name('layouts.frontend.account.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//languages Section
//Route::get('locale/{locale}', function ($locale) {
//    if (in_array($locale, config('locales.supported'))) {
//        App::setLocale($locale);
//        Session::put('locale', $locale);
//    }
//    return redirect()->back();
//});



Route::post('locale-switch', [LocaleController::class, 'switchLocale'])->name('locale.switch');

