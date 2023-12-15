<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Detalhes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        * {
            font-family: "Poppins", sans-serif !important;
        }

        .card-border {
            border-width: 2px !important;
        }

        .card-img-top {
            width: 100% !important;
            height: 200px !important;
            object-fit: cover !important;
        }

        hr {
            border-color: #000000 !important;
        }

        .img {
            padding: 12px !important;
            width: 130px !important;
            height: auto !important;
            position: absolute !important;
            top: 10px !important;
            left: 10px !important;
        }
    </style>
</head>

<body>
    <div>
        <a href="{{ route('home') }}">
            <img class="img" src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
    </div>
    <h1 class="text-center mt-3 p-5 p-3">{{ $produtos->nome }}</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-2 me-3 card border border-dark card-border mb-3">
                <div class="card-img-container">
                    <img class="card-img-top" src="{{ asset('images/' . $produtos->imagem) }}" alt="{{ $produtos->nome }}">
                </div>
                <hr>
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="bordered">
                        <h5 class="card-title">{{ $produtos->nome }}</h5>
                        <p class="card-text">{{ $produtos->preco }}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <form action="{{ route('produtos.destroy', $produtos->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                        <a href="{{ route('produtos.edit', $produtos->id) }}" class="btn btn-success ml-1">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>