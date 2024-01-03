<?php

declare(strict_types=1);

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class Clienterepository
{
    
    public static function findAll()
    {
        return DB::select('
        SELECT c.id as cat_id, c.nome as cat_nome, p.*
        FROM categoria c INNER JOIN product p
        ON c.id = p.categoria_id;
        ');
    }

    public static function find($id)
    {
        return DB::selectOne("SELECT * FROM cliente WHERE id={$id}");
    }

    public static function insert(string $nome, string $email, string $cpf, string $endereco)
    {
        DB::insert(
            "INSERT INTO cliente (nome, email, cpf, endereco)
            VALUES ('{$nome}', '{$email}', '{$cpf}', '{$endereco}')"
        );
    }
    
    public static function update($id, string $nome, string $email): void
    {
        DB::update("UPDATE cliente SET nome='{$nome}', email='{$email}' WHERE id={$id}");
    }

    public static function remove($id): void
    {
        DB::delete("DELETE FROM cliente WHERE id={$id}");
    }
}