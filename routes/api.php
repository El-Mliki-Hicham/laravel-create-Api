<?php
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get("data",[Controller::class,'GetApi']);
route::post("add",[Controller::class,'saveData']);
route::get("data/{id}",[Controller::class,'FindId']);
Route::put('/update/{id}',[Controller::class,'update']);
Route::delete('delete/{id}',[Controller::class,'delete']);
