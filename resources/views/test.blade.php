<h1>Test Blade</h1>
@php
    $name = 'Jennifer';
    $fruits = ['Mango', 'Orange', 'Apple', 'Banana'];
    $age = 18;
@endphp

<h3>{{ $name }}</h3>

<h3>Fruits</h3>
@foreach ($fruits as $fruit)
    <ul>
        <li>{{ $fruit }}</li>
    </ul>
@endforeach

<br>

@for ($i = 0; $i < 10; $i++)
    <p>{{ $i }} </p>
@endfor

@if (count($fruits) == 1)
    Single Fruit
@elseif (count($fruits) > 1)
    More than one fruits
@else
    No fruits
@endif

<br>

{{ $age >= 18 ? 'You are an adult' : 'You are not an adult' }}
