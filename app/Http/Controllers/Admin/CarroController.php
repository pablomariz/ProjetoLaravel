<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function carros(){

        $subtitulo = 'Lista de carros';

        $carros = ['Ferrari', 'BMW', 'Volkswagen'];
        
        $ano_fabricacao = '2020';

        return view('index', compact('subtitulo', 'carros', 'ano_fabricacao')); 

    }
}
