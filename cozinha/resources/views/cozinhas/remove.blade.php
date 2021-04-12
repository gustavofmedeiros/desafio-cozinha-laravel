@extends('shared.base')
@section('content')


<h1>Deseja mesmo remover esta cozinha?</h1>
<form method="post" action="{{route ('cozinhas.destroy', $cozinha->id)}}">
<input type="hidden" name="_method" value="DELETE">
{{ csrf_field() }}
Cozinha sselecionada: {{$cozinha->tipo}} <br/>
<input type="submit" value="apagar">Apagar cozinha</input>
<a href="{{ url()->previous() }}">Cancelar esta ação</a>
</form>
	</div>
@endsection
