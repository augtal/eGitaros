@extends('layouts.app')

@section('content')
        <div id="contentLeft">
            <br>
            <a class = "button" href="/contact">Atgal</a>
        </div>

        <div id="contentRight">
                <div class="container">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact/update/'.$contact->padalinio_ID) }}">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <br>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Pavadinimas</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="pavadinimas" value="{{$contact->pavadinimas}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Adresas</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="adresas" value="{{$contact->adresas}}">
                                </div>
                            </div>

                            <div class="form-group">
                                    <label class="col-md-4 control-label">Telefonas</label>
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control" name="telefonas" value="{{$contact->telefonas}}">
                                    </div>
                            </div>

                            <div class="form-group">
                                    <label class="col-md-4 control-label">E. pastas</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="epastas" value="{{$contact->epastas}}">
                                    </div>
                            </div>

                            <br>

                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button type="submit" class="button">
                                            <span class="glyphicon glyphicon-refresh"></span>
                                            Redaguoti
                                        </button>
                                    </div>
                                </div>
                        </form>

                </div>
        </div>
@endsection
