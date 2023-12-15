<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div>
        <a href="{{ route('home') }}">
            <img class="img" src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
    </div>
    <h1 class="text-center mt-3 p-5 p-3">Salgados Disponiveis</h1>

    <div class="container">
        <div class="row justify-content-center">
            @if($produtos->count())
            @foreach($produtos as $produto)
            <div class="col-12 col-sm-6 col-md-2 me-3 card border border-dark card-border mb-3">
                <a href="{{ route('produtos.show', $produto->id) }}" style="color: inherit; text-decoration: none;">
                    <div class="card-img-container">
                        <img class="card-img-top" src="{{ asset('images/' . $produto->imagem) }}" alt="{{ $produto->nome }}">
                    </div>
                    <hr>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="bordered">
                            <h5 class="card-title">{{ $produto->nome }}</h5>
                            <p class="card-text">{{ $produto->preco }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-success ml-1">Editar</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @else
            <p class="text-center">Nenhum salgado! Por favor, cadastre alguns salgados.</p>
            @endif
        </div>
    </div>

    <div class="text-center">
        <a href="{{ route('produtos.create') }}" class="mt-2 btn btn-info mb-3">Cadastrar Salgado</a>
</body>

</html>