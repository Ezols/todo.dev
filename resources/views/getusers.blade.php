<ul>

    <form action="{{ route('user-filter')  }}">

        <select name="email">

            @foreach($usersselect as $user)


                <option selected="selected" value="{{ $user }}">{{ $user }} </option>
                

            @endforeach


        </select>

        <input type="submit" value="Submit">
    </form>


@foreach($users as $user)

    <li>
        Name:  {{ $user->name }}
        <br>Email: {{ $user->email}}
        <br>Password: {{$user->password}}
    </li>

@endforeach


</ul>


<a href="{{ url('') }}" >
    <h1 style="
    color: green;
    font-size:34px;
    text-align: center;
    text-decoration: none;"
    >Menucis</h1></a>