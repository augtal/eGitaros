@extends('layouts.app')

@section('content')
        @if(count($contacts) > 1)
            <div id="contentLeft">
                <h2>Padaliniai</h2>
                <ul>
            @foreach($contacts as $contact)
                <h3 style="color: grey">  {{$contact->pavadinimas}}</h3>
            @endforeach
                </ul>
            </div>


                <div id="contentRight">
                    <div>
                    {{$contacts->links()}}
                    </div>

                    @foreach($contacts as $contact)
                    <h2 id="pageTitle">{{$contact->pavadinimas}}</h2>
                    <p>Adresas: {{$contact->adresas}}</p>
                    <p>Telefonas: {{$contact->telefonas}}</p>
                    <p>El pašto adresas: {{$contact->epastas}}</p>
                    <p>--------------------------------</p>
                    @endforeach
                </div>
        @else
            <p>Deja, padaliniu neresta</p>
        @endif
@endsection
