@extends('layouts.default')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection
@section('contenido')
<div class="container" ng-controller="TemaController">
    <div ng-init="maestro_id = {{ Auth::user()->id }}"></div>
    <div ng-init="materia_id = {{ $id }}"></div>
    <div class="row">
         <div class="col s12 center-align">
             <a href="#" class="btn-floating btn-large waves-effect waves-light color-accent btn tooltipped"
                data-tooltip="Agregar Unidad">
                 <i class="fa fa-plus"></i>
             </a>
             <section>
                 <div class="form-header">
                     <h5>
                         <i class="fa fa-codepen"></i>
                         Unidad @{{ unidad }} @{{ tema }}
                     </h5>
                 </div>
                 <div class="form-body">
                 <div class="row">
                     <div class="input-field col s4 offset-s1">
                         <input type="text" class="validate" placeholder="1" ng-model="unidad">
                         <label class="active">Unidad</label>
                     </div>
                     <div class="input-field col s4">
                         <input type="text" class="validate" placeholder="Nombre de la unidad" ng-model="tema">
                         <label class="active">Tema</label>
                     </div>
                     <div class="input-field col s3">
                         <input type="date" class="datepicker" ng-model="fecha">
                         <label class="active">Fecha</label>
                     </div>
                 </div>
                 <a href="#" class="waves-effect waves-light color-accent btn tooltipped"
                    data-tooltip="Agregar Subtemas">
                     <i class="fa fa-outdent"></i>
                 </a>
                 <button class="btn waves-effect waves-light color-accent" name="action" ng-click="guardarTema()">
                     Guardar tema
                 </button>
             </div>
             </section>
         </div>
    </div>


    <div class="row">
        <div ng-repeat="t in temas">
            <ul class="collection with-header">
                <li class="collection-header">
                    <h5>
                        <i class="fa fa-slack"></i> Unidad @{{ t.unidad }} @{{ t.tema }} @{{ t.fecha }}
                        <span class="badge" ng-click="showForm()">editar</span>
                    </h5>
                </li>
                <li class="collection">
                    <div class="input-field col s4 offset-s1">
                        <input type="text" class="validate" placeholder="1" ng-model="subtema">
                        <label class="active">Subtemas</label>
                    </div>
                    <div class="input-field col s3">
                        <input type="date" class="datepicker" ng-model="fecha_dos">
                        <label class="active">Fecha</label>
                    </div>
                    <button class="btn waves-effect waves-light color-accent" name="action" ng-click="guardarSubtema()">
                        Guardar Subtema
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
            $("section").hide();
            $("a[data-tooltip='Agregar Unidad']").on('click', function () {
                $("section").toggle("swing");
            });

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15 // Creates a dropdown of 15 years to control year
            });

            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });

    </script>
@endsection