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
    position: relative;
    left: 200px;

}

</style>



@foreach($users as $user)

    <li>
        <b>{{ $user['name'] }}</b>
        <br>{{ $user['age'] }}
        <div class="asd {{ $user['ballance'] > 0 ? "positive" : "negative" }}"> {{ $user['ballance'] }}</div>
    </li>




@endforeach

