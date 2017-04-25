

asd table {{ $x }}, {{ $y }}

{{ dump($colorGrid[1][2]) }}

<table>
    @foreach($colorGrid as $row)

        <tr>
            @foreach($row as $collumn)

                <td>1</td>

            @endforeach
        </tr>

    @endforeach

</table>
