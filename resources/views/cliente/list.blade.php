@include ('_partials/head')

@include ('_partials/navbar')

@include ('_partials/menu')

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h1>Listar Clientes</h1>

            <hr>
            @if (session('sucesso'))
                <div class="alert alert-success">
                    {{ session('sucesso') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente -> id }}</td>
                            <td>{{ $cliente -> nome }}</td>
                            <td>{{ $cliente -> email }}</td>
                            <td>
                                <a href="/excluir-cliente/{{ $cliente -> id}}" class="btn btn-outline-danger">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include ('_partials/footer')