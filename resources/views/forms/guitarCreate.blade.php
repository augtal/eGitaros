@extends('layouts.app')

@section('content')
        <div id="contentLeft">
            <br>
            <a class = "button" href="/guitar/{{$tipas}}">Atgal</a>
        </div>

        <div id="contentRight">
                <div class="container">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('guitar/'.$tipas.'/insert') }}">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @if ($tipas == 1)
                                <input type="hidden" name="tipas" value="AQ">
                            @elseif ($tipas == 2)
                                <input type="hidden" name="tipas" value="EQ">
                            @elseif ($tipas == 3)
                                <input type="hidden" name="tipas" value="BQ">
                            @else
                                <input type="hidden" name="tipas" value="">
                            @endif

                            <div class="form-group">
                                <label class="col-md-4 control-label">Pavadinimas</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="pav" value="">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label">Spalva</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="spalva">
                                            <option value="">---</option>
                                            @foreach($spalvos as $spalva)
                                            <option value="{{$spalva->getKey()}}">{{$spalva->pavadinimas}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label">Kaina</label>
                                <div class="col-md-12">
                                    <input type="number" min="0.00" step="0.01" class="form-control" name="kaina" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Aprasas</label>
                                <div class="col-md-12">
                                    <textarea type="text" class="form-control" name="aprasas"></textarea>
                                </div>
                            </div>


                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button type="submit" class="button">
                                            <span class="glyphicon glyphicon-refresh"></span>
                                            Prideti
                                        </button>
                                    </div>
                                </div>
                            </form>

                </div>
        </div>
@endsection
