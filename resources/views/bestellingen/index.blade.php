@include('layouts.header')

<h1>Bestellingen</h1>

@foreach ($bestellingen as $bestelling)
    <p>{{ $bestelling->klant }}</p>

@endforeach

@include('layouts.footer')
