<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repository\Clienterepository;
use Illuminate\Http\Request;

class ClienteApiController extends Controller
{
    public function getList()
    {
        $clientes = Clienterepository::findAll();

        return response() -> json($clientes);
    }

    public function create(Request $request)
    {
        Clienterepository::insert(
            $request -> nome,
            $request -> email,
            $request -> cpf,
            $request -> endeco
        );

        return response() -> json([], 201);
    }

    public function remove($id)
    {
        Clienterepository::remove($id);

        return response() -> json(null, 204);
    }

    public function update($id, Request $request)
    {
        Clienterepository::update(
            $id,
            $request -> nome,
            $request -> email
        );
    }

    public function getOne($id)
    {
        return response() -> json(
            Clienterepository::find($id)
        );
    }
}