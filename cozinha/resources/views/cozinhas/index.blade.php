@extends('shared.base')


@section('content')


<tbody>
<table>
<thead>
<tr>
<th>Tipo de cozinha</th>
<th>Prato principal</th>
<th>horário de abertura</th>
<th>horário de fechamento</th>
<th>Ação</th>
</tr>
</thead>
    @foreach($cozinhas as $cozinha)
        <tr>
            <td>{{$cozinha->tipo}}</td>
            <td>{{$cozinha->pratoprincipal}}</td>
            <td>{{$cozinha->horarioabertura}}</td>
            <td>{{$cozinha->horariofechamento}}</td>
<td>                                    <a href="{{route('cozinhas.edit', $cozinha->id)}}">Editar</a></td>

<td><a href="{{route('cozinhas.remove', $cozinha->id)}}">Apagar</a></td>



            </tr>
    @endforeach
@endsection


</tbody>
</body>
</html>
