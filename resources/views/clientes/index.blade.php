<h1>Clientes</h1><br>
<a href="{{route('clientes.create')}}">NEW</a>
<ol>
    @foreach ($clientes as $c)
    <li>
        {{$c['nome']}} | <a href="{{route('clientes.edit' $c['id'])}}">Edit</a>
    </li>
    @endforeach
</ol>