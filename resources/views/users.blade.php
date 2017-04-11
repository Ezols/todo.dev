<p>User list: </p>
@foreach($users as $user)
    {{-- <a href="{{ action('UsersController@showuser', [$user->id]) }}" ><p>asdasd {{ $user->name }}</p></a> --}}
    <a href="{{ url('/user', $user->id) }}" ><p>{{ $user->name }}</p></a>
@endforeach


<a href="{{ url('') }}" >
    <h1 style="
    color: green;
    font-size:34px;
    text-align: center;
    text-decoration: none;"
    >Menucis</h1></a>