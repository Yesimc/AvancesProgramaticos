<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
</head>
<body>
<div class="container">
    {!! Form::open(['route' => 'login.post', 'method' => 'POST']) !!}
            <div class="row">
                <div class="input-field col s12">
                    <input name="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {!! Form::text('usuario', null) !!}
                    {!! Form::label('usuario', 'Usuario') !!}
                </div>
            </div>
        <div class="row">
            <button>Login</button>
        </div>
    {!! Form::close() !!}
    @include('partials.errors')
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>
</body>
</html>
