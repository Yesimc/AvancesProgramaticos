<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
</head>
<body>
<div class="container">
    <form action="" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
        <div class="row">
            <button>Login</button>
        </div>
    </form>
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>
</body>
</html>
