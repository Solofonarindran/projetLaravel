<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/lodge/registre',function(){return view('front_office/registre');})->name('registre');
Route::get('/lodge/login',function(){return view('front_office/login');})->name('login');
Route::post('/registre','App\Http\Controllers\AuthClient@customRegistration')->name('custreg');
Route::post('/customLogin','App\Http\Controllers\AuthClient@customlogin')->name('custlog');




//  Route::middleware('auth')->group(function(){ 


    Route::get('/logout','App\Http\Controllers\AuthClient@logout')->name('logout');
    Route::get('/accueil','App\Http\Controllers\LogementController@getall')->name('accueil');
    Route::get('/lodge',function(){return view('front_office/lodge');})->name('lodge');
    //recherche par province
    Route::post('/lodge/research','App\Http\Controllers\LogementController@research')->name('research_lodge');
    //detail logement par id
    Route::get('/lodge/detail/{id?}','App\Http\Controllers\LogementController@getById')->name('detail_lodge');
    Route::post('/lodge/buy','App\Http\Controllers\LogementStatController@buy')->name('buy_lodge');
    Route::post('/lodge/new','App\Http\Controllers\LogementController@edit')->name('new');
    
    Route::get('/agence','App\Http\Controllers\AgenceController@getall')->name('agence');
    //vue 
    Route::get('/agence/detail/{id?}','App\Http\Controllers\AgenceController@getById')->name('detail_agence');
    
    
    Route::get('/agence/crédit','App\Http\Controllers\LogementStatController@listecredit')->name('listecredit');
    Route::get('/agence/paye','App\Http\Controllers\LogementStatController@listepaye')->name('listepaye');
    Route::get('/agence/detail/more/{id?}','App\Http\Controllers\LogementStatController@getByAgenceId')->name('lodge_agence');
    

    Route::get('/cred/detail{id?}','App\Http\Controllers\CrediteurController@detail')->name('detail_crediteur');
    Route::get('/cred/crediteur','App\Http\Controllers\CrediteurController@listeAll')->name('liste_crediteur');
    Route::post('/abonnez','App\Http\Controllers\CrediteurController@edit')->name('post_abonnez');

  
    
    //contrat || facture detail agence route name('lodge_agence')
    Route::get('/contrat{id?}','App\Http\Controllers\LogementStatController@contrat')->name('contrat');
    Route::get('/contratfact/{id?}','App\Http\Controllers\LogementStatController@factured')->name('contratfact');
    Route::get('/dashboard','App\Http\Controllers\DashboardController@dashboard')->name('dashboard');

// });
