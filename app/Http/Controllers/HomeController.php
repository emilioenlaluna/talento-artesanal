<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Categoria;


class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["titulo"] = "Inicio - My Learning Coach";
        $viewData["subtitulo"] = "Etsy";
        return view('home.index')->with("viewData", $viewData);
    }

    public function nosotros()
    {
        $viewData = [];
        $viewData["titulo"] = "Nosotros - Etsy";
        $viewData["subtitulo"] = "Nosotros";
        $viewData["descripcion"] = "Plataforma de capacitación para artesanos etsy";
        $viewData["copyright"] = "Desarrollado por: The Honey";
        $viewData["Miembro1"] = "Cristian Israel Donato Flores";
        $viewData["Miembro2"] = "Emilio Luna Pérez";
        $viewData["tech"] = "Laravel, Bootsrap, CSS, BLADE:HTML5";
        return view('home.nosotros')->with("viewData", $viewData);
    }


    public function contacto()
    {
        $viewData = [];
        $viewData["titulo"] = "Etsy - Contacto";
        $viewData["subtitulo"] = "Etsy";
        return view('home.contacto')->with("viewData", $viewData);
    }

}
