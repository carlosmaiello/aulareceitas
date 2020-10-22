<html>
    <body>
        <h1>Nova Receita</h1>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif

        <form method="POST" action="{{ route('receitas.store') }}">
            @csrf
            <div>
                <input type="text" name="titulo" placeholder="Título:" />
            </div>
            <div>
                <textarea name="ingredientes" placeholder="Ingredientes:"></textarea>
            </div>
            <div>
                <textarea name="modo_preparo" placeholder="Modo de Preparo:"></textarea>
            </div>
            <div>
                <input type="number" name="tempo_preparo" placeholder="Tempo de preparo:" />
                (em minutos)
            </div>
            <div>
                <input type="number" name="porcoes" placeholder="Porções:" />
            </div>
            <button>Cadastrar</button>
        </form>
    </body>
</html>