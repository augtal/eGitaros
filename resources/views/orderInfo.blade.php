@extends('layouts.app')

@section('content')
        <div id="contentLeft">
            <br>
            <a class = "button" href="/orders">Atgal</a><br><br><br>
        </div>

        <div id="contentRight">
                <div class="container">
                        @if(count($orderItems) >= 1)
                        <table style="width:100%">
                                <tr>
                                    <th>Prekes pavadinimas</th>
                                    <th>Kaina</th>
                                    <th>Kiekis</th>
                                    <th>Tipas</th>
                                    <th>Padalinys</th>
                                </tr>
                            @foreach($orderItems as $item)
                                <tr>
                                    <th><a href="/guitar/{{$item['tipasNum']}}/{{$item['prekesID']}}">{{$item['prekesPav']}}</a></th>
                                    <th>{{$item['kaina']}}</th>
                                    <th>{{$item['kiekis']}}</th>
                                    <th>{{$item['tipas']}}</th>
                                    <th>{{$item['padalinys']}}</th>
                            @endforeach
                            </table>
                        @else
                            Uzsakyme nera prekiu.
                        @endif
                </div>
        </div>
@endsection
