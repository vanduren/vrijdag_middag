<h1>Pizza's</h1>

@foreach ($pizzas as $pizza)
    <p>{{ $pizza->name }}</p>

@endforeach
