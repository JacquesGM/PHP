@include ('_partials/head')

@include ('_partials/navbar')

@include ('_partials/menu')

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h1>Novo Clientes</h1>

            <hr>

            <form method="post" action="">
                @csrf
                <label for="name">Nome</label>
                <input type="text" id="name" name="nome" class="form-control mb-3">
                               
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control mb-3">
                
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" class="form-control mb-3">
                
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" class="form-control mb-3">
                
                <button class="btn btn-primary">Pronto</button>
            </form>
        </div>
    </div>
</div>


@include ('_partials/footer')