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


/* *******************************************
 * USUARIO VERIFICADO
 ******************************************** */

Route::middleware(['auth', 'verified'])->group(function () {
});


/* *******************************************
 * USUARIO
 ******************************************** */

Route::middleware(['usuario'])->group(function () {

    Route::get('/usuario/dashboard', 'App\Http\Controllers\Alumno\Home\AlumnoHomeController@dashboard')->name('alumno.dashboard');

    Route::get('/usuario/miscursos', 'App\Http\Controllers\Alumno\Home\AlumnoHomeController@miscursos')->name('alumno.miscursos');

    Route::get('/usuario/miscursos/curso/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@curso')->name('alumno.curso');

    Route::get('/usuario/Leccion/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@leccion')->name("alumno.leccion");

    Route::get('/usuario/miscursos/curso/leccion/foro/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@foroLeccion')->name('alumno.curso.foro.leccion');

    Route::post('/usuario/miscursos/curso/leccion/foro/mensaje', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@enviarMensaje')->name('alumno.curso.foro.enviarMensaje');

    Route::get('/usuario/miscursos/curso/leccion/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@leccion')->name('alumno.curso.leccion');

    Route::post('/usuario/inscribir/{id}', 'App\Http\Controllers\Alumno\Cursos\AlumnoCursosController@inscribir')->name('alumno.inscribir');


});




/* *******************************************
* ADMINISTRADORES
******************************************** */

Route::middleware(['admin', 'auth'])->group(function () {

    Route::get('/admin', 'App\Http\Controllers\Admin\Home\MaestroHomeController@dashboard')->name("admin.home.dashboard");

    Route::get('/admin/Cursos', 'App\Http\Controllers\Admin\Cursos\MaestroCursosController@index')->name("admin.cursos");

    Route::post('/admin/Cursos/Guardar', 'App\Http\Controllers\Admin\Cursos\MaestroCursosController@guardar')->name("admin.cursos.guardar");

    Route::get('/admin/Cursos/Leccion/{id}', 'App\Http\Controllers\Admin\Cursos\MaestroLeccionesController@leccion')->name("admin.cursos.leccion");

    Route::post('/admin/Cursos/Leccion/guardar', 'App\Http\Controllers\Admin\Cursos\MaestroLeccionesController@guardarleccion')->name("admin.guardarleccion");


    Route::get('/admin/Cursos/Material/{id}', 'App\Http\Controllers\Admin\Cursos\MaestroLeccionesController@material')->name("admin.cursos.material");

    Route::post('/admin/Cursos/Leccion/Guardar', 'App\Http\Controllers\Admin\Cursos\MaestroLeccionesController@guardarmaterial')->name("admin.leccion.guardarmaterial");


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
* RUTAS DE AUTH
******************************************** */

Auth::routes(['verify' => true]);




