<?php

use Illuminate\Http\Request;
use App\Rulers;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('rulers', function () {
    return response(Rulers::all(),200);
});

Route::post('rulers', function(Request $request) {
    $resp = Rulers::create($request->all());
    return $resp;
});