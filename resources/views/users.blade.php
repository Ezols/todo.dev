
@foreach($users as $user)
    {{-- <a href="{{ action('UsersController@showuser', [$user->id]) }}" ><p>asdasd {{ $user->name }}</p></a> --}}
    <a href="{{ url('/user', $user->id) }}" ><p>{{ $user->remember_token }} {{ $user->name }}</p></a>
@endforeach