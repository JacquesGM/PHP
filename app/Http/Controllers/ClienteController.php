<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repository\Clienterepository;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function remove(string $id)
    {
        Clienterepository::remove($id);

        return redirect('/clientes') -> with('sucesso', 'Pronto, Cliente excluido');
    }

    public function add(Request $request)
    {
        $nome = $request -> input('nome');
        
        if ($nome) {
            $email = $request -> input('email');
            $cpf = $request -> input('cpf');
            $endereco = $request -> input('endereco');

            Clienterepository::insert(
                $nome,
                $email,
                $cpf,
                $endereco
            );

            return redirect('/clientes') -> with('sucesso', 'Novo cliente criado');
        }

        return view('cliente/add');
    }

    public function list()
    {
        $clientes = Clienterepository::findAll();

        return view('cliente/list', [
            'clientes' => $clientes,
        ]);
    }
}