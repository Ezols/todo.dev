<style>
    body {
        margin:0;

    }
    td {
        height: 200px;
        width:  200px;
      }
</style>


<table>
    @foreach($colorGrid as $row)

        <tr>
            @foreach($row as $color)

                <td style="background: rgb({{ implode(",", $color) }});"></td>


            @endforeach
        </tr>

    @endforeach

</table>
