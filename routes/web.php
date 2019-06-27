<?php
use App\Models\Message;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');
Route::get('/secretaria', 'PagesController@secretary');
Route::get('/formacion/sanidad', 'PagesController@formacionSanidad');
Route::get('/formacion/administracion', 'PagesController@formacionAdministracion');
Route::get('/formacion/informatica', 'PagesController@formacionInformatica');
Route::get('/contacto', 'PagesController@contact');
Route::get('/noticias', 'PagesController@notices');
Route::get('/nuestro-centro', 'PagesController@nuestroCentro');
Route::get('/formacion/informatica/grado-medio', 'PagesController@gradoMedioInformatica');
Route::get('/formacion/informatica/grado-superior', 'PagesController@gradoSuperiorInformatica');
Route::get('/formacion/sanidad/grado-medio', 'PagesController@gradoMedioSanidad');
Route::get('/formacion/sanidad/grado-superior', 'PagesController@gradoSuperiorSanidad');
Route::get('/formacion/administracion/grado-medio', 'PagesController@gradoMedioAdministracion');
Route::get('/formacion/administracion/grado-superior', 'PagesController@gradoSuperiorAdministracion');

Route::resource('pruebainsertar', 'FormularioController');

Route::group(['middleware' => 'web', 'prefix' => config('backpack.base.route_prefix')], function () {
    Route::auth();
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('backpack.auth.login');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('backpack.auth.register');
    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('backpack.auth.password.reset.token');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('backpack.auth.password.email');
});
