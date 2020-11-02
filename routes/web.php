<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*Route::get('/', function () {
    return view('Landing.index');
});
Route::get('/Landing', function () {
    return view('Landing.acercade');
});
Route::get('/', function () {
    return view('Landing.servicios');
});
Route::get('/', function () {
    return view('Landing.contacto');
});*/
Route::get('/index',[LandingController::class,'index']);
Route::get('/acercade',[LandingController::class,'acercade']);
Route::get('/servicios',[LandingController::class,'servicios']);
Route::get('/contacto',[LandingController::class,'contacto']);
