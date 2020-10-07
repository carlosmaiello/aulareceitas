<html>
<body>
    <h1>{{ $titulo }}</h1>

    @foreach ($receitas as $receita)
        <h3>{{ $receita->titulo }}</h3>
        <h5>Ingredientes</h5>
        <p>{{ $receita->ingredientes }}</p>    
        <h5>Modo de Preparo</h5>
        <p>{{ $receita->modo_preparo }}</p>
    @endforeach
</body>
</html>