<?php

use App\Http\Controllers\MainController;
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

Route::get('/', 'CategoryController@index')->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('otra_ruta', 'MainController@index')->name('main.index');
Route::group(['middleware' => ['custom_auth']], function(){
    Route::get('otra_otra_ruta', 'MainController@second')->name('second.index');
    Route::get('/roles', "RolesController@index")->name('roles.index');
});
Route::get('/rutas', "RoutesController@index")->name('rutas.index');
Route::post('/rutas/encapsulamiento/cambiar', "RoutesController@cambiarEncapsulamientoRuta")->name('rutas.cambiar_encapsulamiento_ruta');


Route::get('/roles_usuario', 'PermissionsController@index')->name('roles_usuario.index');

Route::post('/updateCiclo', 'CiclosController@updateCiclo')->name('ciclos.update');
Route::post('/createCiclo', 'CiclosController@createCiclo')->name('ciclos.create');
