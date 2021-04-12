<!DOCTYPE html>
<html lang="pt-br">
    <head>




        <title>Projeto cozinha New Thinkers</title>
<meta charset="utf-8"/>

    </head>

    <body>
<h2>Restaurante</h2>
Você pode
<a href="{{route('cozinhas.index')}}">Listar cozinhas existentes</a> ou
<a href="{{route('cozinhas.create')}}">Cadastrar uma cozinha nova</a> <br />



        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
  