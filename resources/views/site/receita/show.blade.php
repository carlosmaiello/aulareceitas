<html>
    <body>
        <h1>{{ $receita->titulo }}</h1>
        <a href="{{ route('receitas.edit', $receita->id) }}">Alterar</a>

        <h2>Ingredientes</h2>
        <p>{{ $receita->ingredientes }}</p>

        <h2>Modo de preparo</h2>
        <p>{{ $receita->modo_preparo }}</p>

        <h2>Tempo de preparo</h2>
        <p>{{ $receita->tempo_preparo }} minutos</p>

        <h2>Número de Porções</h2>
        <p>{{ $receita->porcoes }} porções</p>

        <a href="{{ url('receitas') }}">Voltar</a>
    </body>
</html>

