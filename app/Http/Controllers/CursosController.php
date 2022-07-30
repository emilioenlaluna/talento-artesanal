<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class CursosController extends Controller
{
    public function categorias()
    {
        $categorias = DB::table('categorias')
            ->simplePaginate(10);
        $viewData = [];
        $viewData["titulo"] = "Categorias - Talento Artesanal";
        $viewData["subtitulo"] = "Lista de Categorias";
        return view('cursos.categorias', ["viewData" => $viewData, 'categorias' => $categorias]);
    }

    public function cursos()
    {
        $cursos = DB::table('Cursos')
            ->simplePaginate(10);
        $viewData = [];
        $viewData["titulo"] = "Cursos - Talento Artesanal";
        $viewData["subtitulo"] = "Lista de Cursos";
        return view('cursos.cursos',["viewData" => $viewData, 'cursos' => $cursos]);
    }

    public function cursosDeCategoria($id)
    {
        $viewData = [];
        $cursos = DB::table('Cursos')
            ->where('Categoria_idCategoria', $id)
            ->simplePaginate(10);
        $viewData["titulo"] =  "Cursos en Categoria - Talento Artesanal";
        $viewData["subtitulo"] = "Cursos de categoria";
        return view('cursos.cursoscategoria',["viewData" => $viewData, 'cursos' => $cursos]);
    }

    public function detalles($id)
    {
        $viewData = [];
        $curso = DB::table('Cursos')
            ->where('idCurso', $id)
            ->get();
        $viewData["titulo"] = " Detalles - Talento Artesanal";
        $viewData["subtitulo"] = " - Información del Curso";
        $viewData["curso"] = $curso;

        return view('cursos.detalles')->with("viewData", $viewData);
    }

}
