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
<link rel="icon" type="image/png" sizes="32x32" href="\favicon.ico">
@stop
@section('contenido')
<div class="col-md-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="/"><i class="material-icons">home</i> Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Paciente</a></li>
            <li class="breadcrumb-item active" aria-current="page">Añadir Paciente</li>
        </ol>
    </nav>
</div>
<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Añadir paciente</h6>
            <a href="/consola_paciente" class="ms-text-primary">Lista de pacientes
            </a>
        </div>
        <div class="ms-panel-body">
            <?php
               $query2 = "select * from clinica ";

                $data2=DB::select($query2);
              
              ?>
            <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST" action={{route('consola_agregar_paciente')}}>
                            {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom001">Nombre(s)</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre(s)" required="" name="nombre">

                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom002">Apellidos</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" required="" name="apellidos">

                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label for="validationCustom004">Telefono</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="telefono" placeholder="Telefono" required="" name="telefono">

                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="validationCustom003">Correo electronico.</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="correo" placeholder="Correo electronico" required="" name="correo">

                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Foto del paciente</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="validatedCustomFile">Elige la foto...</label>

                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Clinica</label>
                        <div class="input-group">
                            <select class="form-control" id="clinica" required="" name="clinica">
                                @foreach($data2 as $item)
                                <option value="{{ $item->id_clinica }}">{{ $item->nombre_sucursal }} </option>
                                @endforeach
                                
                            </select>

                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label>Dirección</label>
                        <div class="input-group">
                            <textarea class="form-control" id="direccion" rows="3" required=""></textarea>

                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Antecedentes clínicos</label>
                        <div class="input-group">
                            <textarea class="form-control" id="antecedentes" rows="3" required=""></textarea>

                        </div>
                    </div>
                </div>

                <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Cancelar</button>
                <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Crear Paciente</button>
            </form>

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
<!-- Medjestic core JavaScript -->
<script src="\assets\js\framework.js"></script>
<!-- Settings -->
<script src="\assets\js\settings.js"></script>
@stop
@stop
