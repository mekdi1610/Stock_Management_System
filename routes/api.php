<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ItemController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::post('categories/add','CategoryController@addCategory');
Route::get('catagory',[CatagoryController:: class, 'index']);
Route::post('catagory/store',[CatagoryController:: class, 'store']);
Route::get('item',[ItemController:: class, 'index']);
Route::post('item/storeItem',[ItemController:: class, 'storeItem']);
Route::put('item/updateItem/{id}',[ItemController:: class, 'update']);
Route::delete('item/deleteItem/{id}',[ItemController:: class, 'destroy']);