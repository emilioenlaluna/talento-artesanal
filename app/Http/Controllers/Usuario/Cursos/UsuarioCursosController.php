<?php

namespace App\Http\Controllers\Usuario\Cursos;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UsuarioCursosController extends Controller
{


    public function inscribir($id)
    {
        $inscrito = DB::table('inscripcion')
            ->where('inscripcion.Curso_idCurso', $id)
            ->where('inscripcion.users_id', Auth::id())
            ->count();
        if ($inscrito != 0) {
            return redirect()->route('usuario.miscursos');
        }
        DB::table('inscripcion')->insert([
            'Curso_idCurso' => $id,
            'users_id' => Auth::id()
        ]);
        return redirect()->route('usuario.miscursos');
    }


}
