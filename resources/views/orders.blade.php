@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="contentLeft">
        </div>

        <div id="contentRightFull">
                @if(count($orders) >= 1)
                            <table style="width:100%">
                                <tr>
                                    <th>Uzsakymo ID</th>
                                    <th>Kaina</th>
                                    <th>Padalinys</th>
                                </tr>
                            @foreach($orders as $order)
                                <tr>
                                    <th><a href="/orders/{{$order->uzsakymo_ID}}">{{$order->uzsakymo_ID}}</a></th>
                                    <th>{{$order->kaina}}</th>
                                    <th>{{$order->padalinys}}</th>
                                </tr>
                            @endforeach
                            </table>
                        {{$orders->links()}}
                    @else
                        Uzsakymu nera.
                    @endif
        </div>
    </div>
@endsection
