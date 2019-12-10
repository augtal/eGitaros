@extends('layouts.app')

@section('content')
        <div id="contentLeft">
            <img src="{{ asset('storage/image/'.$guitar->pavadinimas.'.jpg') }}" alt="{{$guitar->pavadinimas}}.jpg" style="width:100%"><br>
            <a class = "button" href="/guitar/{{$guitar->tipas}}/">Atgal</a><br><br><br>
            @guest
            @else
            <a class = "button" href="/guitar/{{$guitar->tipas}}/{{$guitar->produkto_ID}}/edit">Redaguoti gitara</a><br><br><br>
            <a class = "button" href="/guitar/{{$guitar->tipas}}/{{$guitar->produkto_ID}}/delete">Salinti gitara</a><br>
            @endguest
        </div>

        <div id="contentRight">
                <div class="container">
                    <h3>Pavadinimas: {{$guitar->pavadinimas}}</h3>
                    <h3>Likutis:
                    @if($likutis > 5)
                            5+
                    @elseif($likutis > 0 && $likutis < 5)
                            {{$likutis}}
                    @else
                            sandelyje nera prekes
                    @endif
                    </h3>
                    <h3>Aprasas: {{$guitar->aprasas}}</h3>
                    <a class = "button" href="/atc/{{$guitar->produkto_ID}}">Pirkti</a>
                </div>
        </div>
@endsection
