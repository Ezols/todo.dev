
<h1>KD1</h1>

<h2>first</h2>
<ul>

    @foreach($array as $arr)

        <li>{{ $arr }}</li>

    @endforeach

</ul>

<h2>second</h2>

<ul>
    @foreach($array2 as $arr)

        <li>{{ $arr }}</li>

    @endforeach
</ul>

<h1>Elementi pedeja masiva = {{ $count }}</h1>

<a href="{{ url('') }}" >
        <h1 style="
    color: green;
    font-size:34px;
    text-align: center;
    text-decoration: none;"
        >Menucis</h1></a>