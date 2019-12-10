@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="contentLeft">
        </div>

        <div id="contentRightFull">
                    @if(session('cart'))
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('updc/insert/'.$id) }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h2>Uzsakymo NR. {{$id}}</h2>

                            <table style="width:100%">
                                <tr>
                                    <th> </th>
                                    <th>Pavadinimas</th>
                                    <th>Kaina</th>
                                    <th>Kiekis</th>
                                </tr>
                            @foreach(session('cart')->items as $id => $preke)
                                <tr>
                                    <th><img src="{{ asset('storage/image/'.$preke['pav'].'.jpg') }}" alt="{{$preke['pav']}}.jpg" style="width:150px;height:150px;"></th>
                                    <th>{{$preke['pav']}}</th>
                                    <th>{{$preke['price'] }}</th>
                                    <th>{{$preke['qty'] }}</th>
                                </tr>
                            @endforeach
                            </table>

                            <h4>Bendra suma: {{ Session::get('cart')->totalPrice }}</h4>

                            <h1>Pasirinkite padalini i kuri pristatyti</h1>
                            <table style="width:100%">
                                    @foreach ($padaliniai as $padalinys)
                                    <th><h2 id="pageTitle">{{$padalinys->pavadinimas}}</h2>
                                    <p>Adresas: {{$padalinys->adresas}}</p>
                                    <p>Telefonas: {{$padalinys->telefonas}}</p>
                                    <p>El pašto adresas: {{$padalinys->epastas}}</p>
                                    <p>--------------------------------</p>
                                    <input type="radio" name="padalinys" value="{{$padalinys->padalinio_ID}}"></th>
                                    @endforeach
                            </table>

                            <button type="submit" class="button">
                                    <span class="glyphicon glyphicon-refresh"></span>
                                    Patvirtinti
                            </button>
                            </form>
                    @else
                        ???
                    @endif
        </div>
    </div>
@endsection
