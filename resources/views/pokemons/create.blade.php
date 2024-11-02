<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Criar Pokémon</h2>
        <form action="{{ url('pokemons') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Pokémon</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome do Pokemon" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo do Pokémon</label>
                <input type="text" id="tipo" name="tipo" class="form-control" placeholder="Tipo do Pokemon" required>
            </div>
            <div class="mb-3">
                <label for="pontos_de_poder" class="form-label">Pontos de Poder</label>
                <input type="number" id="pontos_de_poder" name="pontos_de_poder" class="form-control" placeholder="Pontos de poder" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar Pokémon</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

