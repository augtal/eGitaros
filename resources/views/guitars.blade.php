@extends('layouts.app')

@section('content')
    @if(count($guitars) > 1)
        <div id="contentLeft">
        <h2>{{$tipas}}iu gitaru katalogas</h2>
            <p></p><br>
            @guest
            @else
            <a class = "button" href="/guitar/{{$tipo_nr}}/create">Nauja gitara</a>
            @endguest
        </div>

        <div id="contentRight">
            <div class="row">
            @foreach($guitars as $guitar)
                    <div class="column">
                        <div class="card">

                            <img src="{{ asset('storage/image/'.$guitar->pavadinimas.'.jpg') }}" alt="{{$guitar->pavadinimas}}.jpg" style="width:100%">

                            <h1>{{$guitar->pavadinimas}}</h1>
                            <p class="price">{{$guitar->kaina}} &euro;</p>
                            <button><a href="/guitar/{{$guitar->tipas}}/{{$guitar->produkto_ID}}">Placiau</a></button>
                            <button><a href="/atc/{{$guitar->produkto_ID}}">Pirkti</a></button>
                        </div>
                    </div>
            @endforeach
            </div>

            <footer>
                {{$guitars->links()}}
            </footer>
        </div>
    @else
        <p>Deja, gitaru neresta</p>

    @endif
@endsection
