<style>

    li {
        text-decoration: none;
        list-style: none;
    }

.positive {
    color: green;
}
.negative {
    color: red;
}
.asd{
    position: absolute;
    left: 300px;

}

</style>



@foreach($users as $user)




    <li>
        <b>{{ $user['name'] }}</b>
        @if($user['age']  < 18)

            Tev nav pilngadiba

        @endif
        <br>{{ $user['age'] }}
        <div class="asd {{ $user['ballance'] > 0 ? "positive" : "negative" }}"> {{ $user['ballance'] }}</div>
    </li>




@endforeach

<a href="{{ url('') }}" >
    <h1 style="
    color: green;
    font-size:34px;
    text-align: center;
    text-decoration: none;"
    >Menucis</h1></a>