<!doctype html>
<html lang="es" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    {!! Html::style('css/materialize.min.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    @yield('style')
</head>
<body class="color-backgroung">
<!-- Encabezado -->
<nav>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-large">
        <i class="fa fa-bars fa-lg"></i>
    </a>
</nav>
<!-- Menu sideNav -->
<ul id="slide-out" class="side-nav">
    <li><a href="{{ route('dashboard') }}">Mis materias</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
</ul>


@yield('contenido')

{!! Html::script('js/jquery.js') !!}
{!! Html::script('js/materialize.min.js') !!}
{!! Html::script('js/angular.js') !!}
{!! Html::script('js/app.js') !!}
{!! Html::script('js/controllers/TemaController.js') !!}
@yield('script')
<script>
    $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 240
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        }
    );
</script>
</body>
</html>