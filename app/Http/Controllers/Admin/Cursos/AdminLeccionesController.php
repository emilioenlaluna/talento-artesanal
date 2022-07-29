<?php

namespace App\Http\Controllers\Admin\Cursos;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminLeccionesController extends Controller
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
        return view('admin.lecciones')->with("viewData", $viewData);
    }


    public function guardarleccion(Request $request)
    {
        DB::table('leccion')->insert([
            'NombreLeccion' => $request->input('nombre'),
            'FechaLeccion' => now(),
            'Detalles' => $request->input('detalles'),
            'Curso_idCurso' => $request->input('curso')
        ]);
        return back();
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
        return view('admin.material')->with("viewData", $viewData);
    }

    public function guardarmaterial(Request $request){
        DB::table('materialleccion')->insert([
            'contenido' => $request->input('contenido'),
            'Leccion_idLeccion' => $request->input('idleccion'),
            'titulo' => $request->input('titulo'),
            'fecha' => now()
        ]);
        return back();
    }

}
