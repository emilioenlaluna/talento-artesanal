<?php

namespace App\Http\Controllers\Usuario\Home;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UsuarioHomeController extends Controller
{

    /**
     * redirect admin after login
     *
     * //* @return \Illuminate\View\View
     */
    public function dashboard()
    {
        $viewData = [];
        $viewData["title"] = "Alumno -My Learning Coach";
        return view('usuario.dashboard')->with("viewData", $viewData);
    }

    public function miscursos()
    {
        $viewData = [];
        $viewData["title"] = "Alumno -My Learning Coach";
        $cursos = DB::table('inscripcion')
            ->join('cursos', 'inscripcion.Curso_idCurso', '=', 'cursos.idCurso')
            ->select('cursos.NombreCurso', 'cursos.detalles', 'cursos.idCurso','cursos.imagenUrl')
            ->where('inscripcion.users_id', Auth::id())
            ->get();
        $viewData["cursosAlumno"] = json_decode($cursos, true);

        return view('usuario.miscursos')->with("viewData", $viewData);
    }



}
