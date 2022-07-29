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


/* *******************************************
 * HOME
 ******************************************** */

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/Nosotros', 'App\Http\Controllers\HomeController@nosotros')->name("home.nosotros");

Route::get('/Categorias', 'App\Http\Controllers\CursosController@categorias')->name("cursos.categorias");

Route::get('/Cursos', 'App\Http\Controllers\CursosController@cursos')->name("cursos.cursos");

Route::get('/Categorias/{id}/Cursos', 'App\Http\Controllers\CursosController@cursosDeCategoria')->name("cursos.cursoscategoria");

Route::get('/DatalleCurso/{id}', 'App\Http\Controllers\CursosController@detalles')->name("cursos.detalles");

Route::get('/Lecciones/{id}', 'App\Http\Controllers\ContenidoCursosController@leccion')->name("cursos.leccion");

Route::get('/Material/{id}', 'App\Http\Controllers\ContenidoCursosController@material')->name("cursos.material");


/* *******************************************
 * USUARIO VERIFICADO
 ******************************************** */

Route::middleware(['auth', 'verified'])->group(function () {
});




/* *******************************************
 * USUARIO
 ******************************************** */

Route::middleware(['usuario'])->group(function () {

    Route::get('/usuario/dashboard', 'App\Http\Controllers\Usuario\Home\UsuarioHomeController@dashboard')->name('usuario.dashboard');

    Route::get('/usuario/miscursos', 'App\Http\Controllers\Usuario\Home\UsuarioHomeController@miscursos')->name('usuario.miscursos');

    Route::get('/usuario/inscribir/{id}', 'App\Http\Controllers\Usuario\Cursos\UsuarioCursosController@inscribir')->name('usuario.inscribir');


});




/* *******************************************
* ADMINISTRADORES
******************************************** */

Route::middleware(['admin', 'auth'])->group(function () {

    Route::get('/admin', 'App\Http\Controllers\Admin\Home\AdminHomeController@dashboard')->name("admin.home.dashboard");

    Route::get('/admin/Cursos', 'App\Http\Controllers\Admin\Cursos\AdminCursosController@index')->name("admin.cursos");

    Route::post('/admin/Cursos/Guardar', 'App\Http\Controllers\Admin\Cursos\AdminCursosController@guardar')->name("admin.cursos.guardar");

    Route::get('/admin/Cursos/Leccion/{id}', 'App\Http\Controllers\Admin\Cursos\AdminLeccionesController@leccion')->name("admin.cursos.leccion");

    Route::post('/admin/Cursos/Leccion/guardar', 'App\Http\Controllers\Admin\Cursos\AdminLeccionesController@guardarleccion')->name("admin.guardarleccion");

    Route::get('/admin/Cursos/Material/{id}', 'App\Http\Controllers\Admin\Cursos\AdminLeccionesController@material')->name("admin.cursos.material");

    Route::post('/admin/Cursos/Leccion/Guardar', 'App\Http\Controllers\Admin\Cursos\AdminLeccionesController@guardarmaterial')->name("admin.leccion.guardarmaterial");

});



/* *******************************************
 * FOROS PUBLICOS
 ******************************************** */

Route::get('/Foros', 'App\Http\Controllers\ForosController@foros')->name("foros.todos");

Route::get('/Foro/{id}', 'App\Http\Controllers\ForosController@foro')->name("foros.duda");

Route::middleware(['auth'])->group(function () {

    Route::post('/Foro/Escribir', 'App\Http\Controllers\ForosController@escribir')->name("foros.escribir");

    Route::post('/Foro/Preguntar', 'App\Http\Controllers\ForosController@preguntar')->name("foros.preguntar");
});


/* *******************************************
 * HISTORIAS DE EXITO
 ******************************************** */

Route::get('/Historias', 'App\Http\Controllers\HistoriasController@historias')->name("historias.historias");

Route::get('/Historia/{id}', 'App\Http\Controllers\HistoriasController@historiaDetalles')->name("historias.historiaDetalles");

Route::middleware(['auth'])->group(function () {

    Route::post('/Historia/Escribir', 'App\Http\Controllers\HistoriasController@contarHistoria')->name("historias.contarHistoria");

});



/* *******************************************
* RUTAS DE AUTH
******************************************** */

Auth::routes(['verify' => true]);




