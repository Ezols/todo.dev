<style>

    ul {
        list-style-type: none;
        text-decoration: none;
    }

    li
    {
       background: white;
    }

    .array-0
    {
        width:20px;
        height:30px;
        text-align:center;
        line-height:30px;
        font-size:14px;
        padding-left:10px;
        padding-right:10px;
        border-bottom:1px solid;
        border-color:white;
        background: white;
        color: black;
        size: 222px;
    }
    .array-1
    {
        width:20px;
        height:30px;
        text-align:center;
        line-height:30px;
        font-size:14px;
        padding-left:10px;
        padding-right:10px;
        border-bottom:1px solid;
        border-color:white;
        background: black;
        color: white;
        size: 222px;
    }
    .array-2
    {
        width:20px;
        height:30px;
        text-align:center;
        line-height:30px;
        font-size:14px;
        padding-left:10px;
        padding-right:10px;
        border-bottom:1px solid;
        border-color:white;
        background: black;
        color: red;
        size: 222px;
    }
    .array-3
    {
        width:20px;
        height:30px;
        text-align:center;
        line-height:30px;
        font-size:14px;
        padding-left:10px;
        padding-right:10px;
        border-bottom:1px solid;
        border-color:white;
        background: green;
        color: blue;
        size: 222px;
    }.array-4
     {
             width:20px;
             height:30px;
             text-align:center;
             line-height:30px;
             font-size:14px;
             padding-left:10px;
             padding-right:10px;
             border-bottom:1px solid;
             border-color:white;
             background: magenta;
             color: yellow;
             size: 222px;
     }.array-5
      {
                   width:20px;
                   height:30px;
                   text-align:center;
                   line-height:30px;
                   font-size:14px;
                   padding-left:10px;
                   padding-right:10px;
                   border-bottom:1px solid;
                   border-color:white;
                   background: yellow;
                   color: magenta;
                   size: 222px;
      }
    .array-6
    {
        width:20px;
        height:30px;
        text-align:center;
        line-height:30px;
        font-size:14px;
        padding-left:10px;
        padding-right:10px;
        border-bottom:1px solid;
        border-color:white;
        background: green;
        color: orchid;
        size: 222px;
    }


</style>

<center><h1>Duuma lapa</h1></center>
<h2>Menucis</h2>

<a href="{{ url('/user') }}" ><p>Juzeri</p></a>
<a href="{{ url('/test') }}" ><p>test</p></a>
<a href="{{ url('/tasks') }}" ><p>tasks</p></a>
<a href="{{ url('/loops?size=10&minn=22&between=1,2') }}" ><p>loops</p></a>
<a href="{{ url('getusers') }}" ><p>User filter</p></a>



<ul>
    @foreach($array as $arr)

        <li  class="array-{{ $loop->index }}">{{ $arr }}</li>



    @endforeach


</ul>