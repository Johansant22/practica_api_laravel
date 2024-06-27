<?php


use App\Http\Controllers\Api\RegistrerControler;
use App\Http\Controllers\Api\RegistrerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/prueba', function (){
    return 'prueba';
});

Route::post('register', [RegistrerController::class,'store'])->name('api.v1.registrer');


//Route::post('registrer',[Register::class, 'store'])->name('api-v1.registrer');

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});
