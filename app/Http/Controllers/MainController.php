<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Home(){
        $titulo = "RVTech";

        $servicos = ['Desenvolvimento Web', 'Desenvolvimento Mobile', 'Manutenção em redes', 'Manutenção em computadores'];

        return View('Home', compact('titulo', 'servicos'));
    }
}
