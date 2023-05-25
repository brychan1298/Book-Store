<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/{id}',[BookController::class,'index']);
Route::get('/{id}/category/{idCategory}', [CategoryController::class, 'show']);
Route::get('/{id}/contact', function($id){
    $user = User::find($id); // KALAU MAU ARAHIN KE CONTROLLER DULU JUGA BOLEH

    return view("contact" ,compact("user"));
});
Route::get('/{id}/detail/{idBook}', [BookController::class, 'show']);
Route::post('/buyBooks',[TransactionController::class, 'store']);
Route::get("/{id}/transaction", [TransactionController::class, 'index']);
