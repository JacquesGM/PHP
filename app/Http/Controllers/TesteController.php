<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TesteController extends Controller 
{
    public function login()
    {
        $alunos = ['Cecilia', 'Laerte', 'Jacques', 'Maxwell'];

        $categorias = DB::select('SELECT * FROM categoria');

        return view('teste/login', [
            'nome' => 'Chiquim',
            'alunos' => $alunos,
            'categorias' => $categorias,
        ]); //funcao laravel
    }
}