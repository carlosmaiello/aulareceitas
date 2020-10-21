<html>
    <body>
        <h1>Alterando a receita</h1>

        <form method="post" action="{{ route('receitas.update', $receita->id) }}">
            @method('PUT')
            @csrf

            <div>
                <input type="text" name="titulo" placeholder="Título:" value="{{ $receita->titulo }}" />
            </div>
            <div>
                <textarea name="ingredientes" placeholder="Ingredientes:">{{ $receita->ingredientes }}</textarea>
            </div>
            <div>
                <textarea name="modo_preparo" placeholder="Modo de Preparo:">{{ $receita->modo_preparo }}</textarea>
            </div>
            <div>
                <input type="number" name="tempo_preparo" placeholder="Tempo de preparo:" value="{{ $receita->tempo_preparo }}"/>
                (em minutos)
            </div>
            <div>
                <input type="number" name="porcoes" placeholder="Porções:" value="{{ $receita->porcoes }}" />
            </div>
            <button>Alterar</button>


        </form>
    </body>
</html>