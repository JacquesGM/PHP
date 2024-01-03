<h1>Login</h1>

<p>Bem vindo {{ $nome }}</p>

<ul>
    @foreach ($alunos as $aluno)
        <li> {{ $aluno }}</li>
    @endforeach
</ul>

<table border="1">
    <thead>
        <th>#ID</th>
        <th>Nome</th>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr> 
                <td>{{ $categoria -> id }}</td>
                <td>{{ $categoria -> nome }}</td> 
            </tr>
        @endforeach
    </tbody>
</table>