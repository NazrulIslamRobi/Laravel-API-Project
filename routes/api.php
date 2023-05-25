<?php

use App\Http\Controllers\ArticleController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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



Route::get('/articles',[ArticleController::class,'getAllArticles']);
Route::get('/article/{id}',[ArticleController::class,'getArticle']);
Route::post('/article',[ArticleController::class,'createArticle']);
Route::put('/article/{id}',[ArticleController::class,'updateArticle']);
Route::delete('/article/{id}',[ArticleController::class,'deleteArticle']);


Route::get('/create',function(){
    User::forceCreate([
        'name' => 'Baijid Hossain',
        'email'=> 'baijid@gmail.com',
        'password'=> Hash::make('baijid12345'),
    ]);
    User::forceCreate([
        'name' => 'Nazrul Islam',
        'email'=> 'nazrul@gmail.com',
        'password'=> Hash::make('nazrul12345'),
    ]);
});