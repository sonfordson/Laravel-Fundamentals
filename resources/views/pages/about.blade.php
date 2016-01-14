@extends('master')
@section('content')
<div class="container">
    <div class="content">

        <div><h1>About Me  </h1></div>

            @foreach($people as $p)
                    <li>{{ $p }}</li>
            @endforeach

        </div>
    </div>
</div>
@stop
