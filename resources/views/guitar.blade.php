@extends('layouts.app')

@section('content')
    @if(count($guitars) > 1)
        <div id="contentLeft">
            <h2>{{$type}} Gitaros</h2>
            <p></p>
        </div>
        <div id="contentRight">
            <div class="row">
            @foreach($guitars as $guitar)
                    <div class="column">
                        <div class="card">
                            <img src="img/{{$guitar->pavadinimas}}.jpg" alt="{{$guitar->pavadinimas}}" style="width:100%">
                            <h1>{{$guitar->pavadinimas}}</h1>
                            <p>{{$guitar->aprasas}}</p>
                            <p class="price">{{$guitar->kaina}}</p>
                            <button disabled>Placiau</button>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    @else
        <p>Deja, gitaru neresta</p>
    @endif
@endsection
