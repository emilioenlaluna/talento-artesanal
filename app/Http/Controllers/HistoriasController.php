<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HistoriasController extends Controller
{

    public function historias()
    {
        $historias = DB::table('historias')
            ->select('historias.titulo', 'historias.fecha', 'historias.id','historias.url')
            ->orderByDesc('historias.fecha')
            ->simplePaginate(10);
        $viewData = [];
        $viewData["titulo"] = "Historias de Exito";
        $viewData["subtitulo"] = "Inspirate viendo Etsy Historias";
        return view('historias.all', ["viewData" => $viewData, 'historias' => $historias]);
    }

    public function historiaDetalles($id)
    {
        $historia = DB::table('historias')
            ->select('historias.titulo', 'historias.fecha', 'historias.contenido')
            ->where('dudas.id', $id)
            ->get();
        $viewData = [];
        $viewData["titulo"] = "Detalles Duda";
        $viewData["subtitulo"] = "Duda";
        $viewData["historia"] = json_decode($historia, true);
        return view('historia.detalles', ["viewData" => $viewData]);
    }


    public function contarHistoria(Request $request){
        DB::table('dudas')->insert([
            'contenido' => $request->input('contenido'),
            'fecha' => now(),
            'titulo' => $request->input('titulo'),
            'users_id' => Auth::id(),
            'url' => $request->input('url'),
        ]);
        return back();
    }

}
