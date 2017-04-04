<ul>

    <form action="{{ route('user-filter')  }}">
        <select name="emails">


            @foreach($usersselect as $user)


                <option selected="selected" value="{{ $user->email }}">{{ $user->email }} </option>

                

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