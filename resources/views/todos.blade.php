<h1>Todos Page</h1>
@foreach ($todos as $todo)
    <li>{{ $todo -> title }}</li>
@endforeach
