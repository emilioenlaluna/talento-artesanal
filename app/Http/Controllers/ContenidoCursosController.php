<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class ContenidoCursosController extends Controller
{
    public function leccion($id)
    {
        $hijos = DB::table('leccion')
            ->select('leccion.NombreLeccion', 'leccion.FechaLeccion', 'leccion.Detalles', 'leccion.idLeccion')
            ->where('leccion.Curso_idCurso', '=', $id)
            ->get();
        $viewData = [];
        $viewData["title"] = "Gestionar Lecciones";
        $viewData["lecciones"] = json_decode($hijos, true);
        $viewData["idCurso"] = $id;
        return view('cursos.lecciones')->with("viewData", $viewData);
    }


    public function material($id)
    {
        $material = DB::table('materialleccion')
            ->select(
                'materialleccion.contenido',
                'materialleccion.fecha',
                'materialleccion.titulo',
            )
            ->where('materialleccion.Leccion_idLeccion', '=', $id)
            ->get();
        $viewData = [];
        $viewData["title"] = "Material";
        $viewData["material"] = json_decode($material, true);
        $viewData["idleccion"] = $id;
        return view('cursos.material')->with("viewData", $viewData);
    }

}
