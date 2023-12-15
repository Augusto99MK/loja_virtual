<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Editar Produto</title>
</head>

<body>
    <div>
        <a href="{{ route('home') }}">
            <img class="img" src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
    </div>

    <div class="content-wrapper">
        <div class="title-container">
            <h1>
                Cantina de Salgados
            </h1>
            <img class="salgado-image" src="{{ asset('img/salgado.png') }}" alt="Salgado">
        </div>

        <div class="container">
            <section class="header">
                <h2>Editar Salgado</h2>
            </section>
            <form class="form" action="{{ route('produtos.update', $produtos->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-content">
                    <label for="nome">Nome do Salgado</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o nome do salgado..."
                        value="{{ $produtos->nome }}" />
                    <a>Aqui vai a mensagem de erro....</a>
                </div>

                <div class="form-content">
                    <label for="preco">Preco do Salgado</label>
                    <input type="number" id="preco" name="preco" step="0.01"
                        placeholder="Digite o seu preço do salgado..." value="{{ $produtos->preco }}" />
                    <a>Aqui vai a mensagem de erro....</a>
                </div>

                <div class="form-content">
                    <label for="imagem">Imagem</label>
                    <input type="file" id="imagem" name="imagem" placeholder="Insira a imagem do salgado..." />
                    <a>Aqui vai a mensagem de erro....</a>
                </div>

                <button type="submit">Atualizar</button>

            </form>

        </div>

    </div>


</body>

</html>