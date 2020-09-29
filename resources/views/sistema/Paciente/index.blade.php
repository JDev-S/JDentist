@extends('welcome')
@section('styles')
<link href="\icon.css?family=Material+Icons" rel="stylesheet">
<link href="\vendors\iconic-fonts\font-awesome\css\all.min.css" rel="stylesheet">
<link rel="stylesheet" href="\vendors\iconic-fonts\flat-icons\flaticon.css">
<link rel="stylesheet" href="\vendors\iconic-fonts\cryptocoins\cryptocoins.css">
<link rel="stylesheet" href="\vendors\iconic-fonts\cryptocoins\cryptocoins-colors.css">
<!-- Bootstrap core CSS -->
<link href="\assets\css\bootstrap.min.css" rel="stylesheet">
<!-- jQuery UI -->
<link href="\assets\css\jquery-ui.min.css" rel="stylesheet">
<!-- Page Specific CSS (Slick Slider.css) -->
<link href="\assets\css\slick.css" rel="stylesheet">
<!-- Medjestic styles -->
<link href="\assets\css\style.css" rel="stylesheet">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="\favicon.ico">
<!-- Page Specific Css (Datatables.css) -->
<link href="\assets\css\datatables.min.css" rel="stylesheet">
@stop
@section('contenido')
<div class="col-md-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="/"><i class="material-icons">home</i> Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Paciente</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de pacientes</li>
        </ol>
    </nav>
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Lista de pacientes</h6>
            <a href="/consola_agregar_paciente" class="ms-text-primary">Añadir Paciente</a>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
                <table id="data-table-paciente" class="table table-striped thead-primary w-100"></table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h3 class="modal-title has-icon text-white"><i class="flaticon-alert-1"></i> Eliminar paciente</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'PacienteController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
                </div>
                <div class="modal-footer">
                    {{ Form::hidden('id_paciente') }}

                    {!! Form::submit( 'Eliminar', ['class' => 'btn btn-primary shadow-none', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <!--<button type="button" class="btn btn-primary shadow-none">Accept</button>-->
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="\assets\js\jquery-3.3.1.min.js"></script>
<script src="\assets\js\popper.min.js"></script>
<script src="\assets\js\bootstrap.min.js"></script>
<script src="\assets\js\perfect-scrollbar.js"> </script>
<script src="\assets\js\jquery-ui.min.js"> </script>
<!-- Global Required Scripts End -->
<!-- Page Specific Scripts Start -->
<script src="\assets\js\slick.min.js"> </script>
<script src="\assets\js\moment.js"> </script>
<script src="\assets\js\jquery.webticker.min.js"> </script>
<script src="\assets\js\Chart.bundle.min.js"> </script>
<script src="\assets\js\Chart.Financial.js"> </script>
<!-- Page Specific Scripts Finish -->
<!-- Page Specific Scripts Start -->
<script src="\assets\js\datatables.min.js"> </script>
<script src="\assets\js\data-tables.js"> </script>
<!-- Page Specific Scripts End -->
<!-- Medjestic core JavaScript -->
<script src="\assets\js\framework.js"></script>
<!-- Settings -->
<script src="\assets\js\settings.js"></script>


<script type="text/javascript">
    (function($) {
        'use strict';
        var datos = @json($pacientes);
        var arr = [];

        datos.forEach(objeto => {
            var tmp = [];
            tmp.push(
                " <img src='/pacientes/" + objeto.foto + "' style='width:50px; height:30px;'>",
                objeto.nombre + " " + objeto.apellidos,
                objeto.telefono,
                objeto.email,
                "<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a>" +
                '<button type="button" class="far fa-trash-alt ms-text-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + objeto.id_paciente + '" data-nombre="' + objeto.nombre + " " + objeto.apellidos + '"></button>'

                // '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + objeto.id_alimento + '" data-nombre="' + objeto.nombre_alimento + '">Eliminar</button>' +
                //'<a href="/actualizar_alimento?alimento=' + objeto.id_alimento + '" class="btn btn-primary">Actualizar</a>'
                //objeto.id_alimento,
                //objeto.id_categoria 


                //"<img src='"+objeto.foto+"' >"+", "Old York, Abington", "Fever", "7", "	(836) 257 1379", "denisestevens@example.com", "<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>"
            );
            arr.push(tmp);
            console.log(arr);
        });

        var tableTwo = $('#data-table-paciente').DataTable({
            data: arr,
            columns: [{
                    title: "Fotografia"
                },
                {
                    title: "Nombre Completo"
                },

                {
                    title: "Telefono"
                },
                {
                    title: "Email"
                },
                {
                    title: "Acciones"
                }
            ],
        });
    })(jQuery);

</script>
<!--BORRAR EL PACIENTE   -->
<script type="text/javascript">
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var nombre = button.data('nombre')
        var modal = $(this)
        modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el paciente:' + nombre + '?')
        document.forms[0].id_paciente.value = id
    });

</script>
@stop
@stop
