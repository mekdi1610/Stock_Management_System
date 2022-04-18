<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CatagoryController;
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
});
Route::get('/item', function () {
    return view('items/index');
});
Route::get('/addItem',[ItemController:: class, 'store']);
Route::post('/storeItem',[ItemController:: class, 'storeItem']);
Route::get('/getItems', 'ItemsController@getItems');
Route::post('/deleteItem/{id}', 'ItemsController@deleteItem');
Route::post('/editItems/{id}', 'ItemsController@editItem');
Route::get('catagory',[CatagoryController:: class, 'index']);
Route::post('catagory/store',[CatagoryController:: class, 'store']);



