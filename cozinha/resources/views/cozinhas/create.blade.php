@extends('shared.base')

@section('content')
    <form method="post" action="{{route ('cozinhas.store')}}">
        {{ csrf_field() }}
        <h3>Informações da cozinha</h3>

            <label for="tipo">Tipo</label><br />
            <input type="text"  placeholder="Tipo" name="tipo" required> <br />
<label for="pratoprincipal">Prato principal</label><br />
                    <input type="text" placeholder="Pratoprincipal" name="pratoprincipal" required> <br />


<label for="horarioabertura">horário de abertura</label><br />
                    <input type="number" placeholder="Horário de abertura" name="horarioabertura"><br />
<label for="horariofechamento">horário de fechamento</label><br />
                    <input type="number" placeholder="Horário de fechamento" name="horariofechamento"><br />


<input type="submit" value="Criar">Criar cozinha</input>
    </form>



@endsection

