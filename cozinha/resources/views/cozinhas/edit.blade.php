@extends('shared.base')
@section('content')
            <form method="post" action="{{route ('cozinhas.update', $cozinha->id)}}">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
Informações da cozinha para edição<br />

<label for="tipo">tipo</label><br />
                        <input type="text"  placeholder="tipo" name="tipo" required value="{{$cozinha->tipo}}"><br />
<label for="pratoprincipal">prato principal</label><br />
                        <input type="text"  placeholder="pratoprincipal" name="pratoprincipal" required value="{{$cozinha->pratoprincipal}}"><br />

<label for="horarioabertura">horarioabertura</label><br />
                        <input type="text"  placeholder="horarioabertura" name="horarioabertura" required value="{{$cozinha->horarioabertura}}"><br />
<label for="horariofechamento">horario de fechamento</label><br />
                        <input type="text"  placeholder="horariofechamento" name="horariofechamento" required value="{{$cozinha->horariofechamento}}"><br />

<input type="submit" value="atualizar">Atualizar cozinha</input>
            </form>
@endsection
