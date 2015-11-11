@extends('layouts.default')
@section('style')
    <style>
        .contenido{
            margin-top: 3em;
        }
        h6{
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
@endsection
@section('contenido')
    <div class="container">
        <div class="row">
            @foreach($data as $d)
                <div class="col s4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ asset('img/add.jpg') }}">
                        </div>
                        <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            <i class="fa fa-ellipsis-v right"></i>
                            <h6 class="center-align">{{ $d->materia }}</h6>
                        </span>

                        </div>
                        <div class="card-reveal">

                        <span class="blue-text text-darken-2 ">
                            <div>

                            </div>
                        </span>

                        <span class="card-title grey-text text-darken-4">
                            <div>
                                <h6>
                                    <i class="fa fa-times right"></i>
                                </h6>
                            </div>
                        </span>

                            <div class="contenido center-align">

                                <a href="{{ route('materia', $d->materia_id) }}" class="btn-floating btn-large waves-effect waves-light blue">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <h5>Biologia</h5>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
