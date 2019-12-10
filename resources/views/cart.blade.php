@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="contentLeft">
        </div>

        <div id="contentRightFull">
                    @if(session('cart'))
                            <table style="width:100%">
                                <tr>
                                    <th> </th>
                                    <th>Pavadinimas</th>
                                    <th>Kaina</th>
                                    <th>Kiekis</th>
                                    <th> </th>
                                    <th> </th>
                                </tr>
                            @foreach(session('cart')->items as $id => $preke)
                                <tr>
                                    <th><img src="{{ asset('storage/image/'.$preke['pav'].'.jpg') }}" alt="{{$preke['pav']}}.jpg" style="width:150px;height:150px;"></th>
                                    <th>{{$preke['pav']}}</th>
                                    <th>{{$preke['price'] }}</th>
                                    <th>{{$preke['qty'] }}</th>
                                    <th><a href="/rfc/{{$id}}"><i class="fa fa-trash-o"></i></a></th>
                                    <th><a href="/updc/{{$id}}">+<i class="far fa-sync"></i></th>
                                </tr>
                            @endforeach
                            </table>

                            <h4 class="right">Bendra suma: {{ Session::get('cart')->totalPrice }}</h4>
                            <br><br><br><br>
                            <a class="button" href="cart/confim">Patvirtinti</a>
                    @else
                        Vezimelis tuscias.
                    @endif
        </div>
    </div>
@endsection
