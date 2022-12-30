<div>
    <h1>This is a header component</h1>
    <h3>Hello {{ $name }}</h3>
    <h4>Fruits are: </h4>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>
</div>
