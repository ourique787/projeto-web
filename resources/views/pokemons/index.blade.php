
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
    <h2 class="mb-4 text-center">Lista de Pokemons</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">Nome</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">Pontos de Poder</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pokemons as $pokemon)
            <tr>
                <td class="text-center">{{ $pokemon->nome }}</td>
                <td class="text-center">{{ $pokemon->tipo }}</td>
                <td class="text-center">{{ $pokemon->pontos_de_poder }}</td>
                <td class="text-center">
                    <a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



