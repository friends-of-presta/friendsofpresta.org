<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'index');

Route::group(["prefix"=>"/ecommerce-solidaire"], function() {
    Route::get('', 'Pages\EcommercesolidaireController@index')->name('pages.ecommercesolidaire.index');
    Route::get('/mentions-legales.html', 'Pages\EcommercesolidaireController@legals')->name('pages.ecommercesolidaire.legals');
    Route::get('/affiche.html', 'Pages\EcommercesolidaireController@print')->name('pages.ecommercesolidaire.print');
    Route::get('/annuaire.html', 'Pages\EcommercesolidaireController@inscriptions')->name('pages.ecommercesolidaire.inscriptions');
    Route::post('/inscription.html', 'Pages\EcommercesolidaireController@inscription')->name('pages.ecommercesolidaire.mail');
});

Auth::routes();

Route::group(["prefix"=>"/admin"], function() {
    Route::get('', 'AdminController@index')->name('admin');

    Route::get('/inscriptions', 'Admin\InscriptionController@index')->name('admin.inscriptions');
    Route::get('/inscriptions/stats', 'Admin\InscriptionController@stats')->name('admin.inscriptions.stats');
    Route::group(["prefix"=>"/inscription"], function() {
        Route::get('/{inscription}', 'Admin\InscriptionController@show')->name('admin.inscription');
        Route::put('/{inscription}', 'Admin\InscriptionController@update');
        Route::post('/{inscription}/notif', 'Admin\InscriptionController@notif')
            ->name('admin.inscription.notif')
            ->middleware('can:notif,inscription');
    });

    Route::get('/users', 'Admin\UserController@index')->name('admin.users');
});