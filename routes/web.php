<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\JuragarWarungKelontongController;

Route::get('/', function () {
    return view('home', [HomeController::class, 'index']);
});
Route::get('/contact', function () {
    return view('contact', [ContactPageController::class, 'index']);
});
Route::get('/juraganWarungKelontong', function () {
    return view('juraganWarungKelontong', [JuragarWarungKelontongController::class, 'index']);
});
Route::get('/juraganGrosir', function () {
    return view('juraganGrosir', [JuraganGrosirController::class, 'index']);
});
Route::get('/distributorFMCG', function () {
    return view('distributorFMCG', [DistributorFMCGController::class, 'index']);
});
Route::get('/brandSupplier', function () {
    return view('brandSupplier', [BrandSupplierController::class, 'index']);
});
