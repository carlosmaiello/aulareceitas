<html>

<body>
    <h1>{{ $titulo }}</h1>

    <a href="{{ route('receitas.create') }}">Adicionar Receita</a>
    <hr>

    @foreach ($receitas as $receita)
        <h3>
            <a href="{{ url('receitas/' . $receita->id) }}">{{ $receita->titulo }}</a>
        </h3>
    @endforeach
</body>

</html>