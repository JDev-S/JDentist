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
                "<a href='/consola_expediente_paciente'><i class='fas fa-pencil-alt ms-text-primary'></i></a>"
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

@stop
@stop
