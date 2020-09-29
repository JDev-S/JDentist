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
<!-- Medjestic styles -->
<link href="\assets\css\style.css" rel="stylesheet">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="\favicon.ico">
<!-- Page Specific Css (Datatables.css) -->
<link href="\assets\css\datatables.min.css" rel="stylesheet">
@stop
@section('contenido')
<div class="ms-content-wrapper">
    <div class="ms-profile-overview">
        <div class="ms-profile-cover">
            <img class="ms-profile-img" src="..\..\assets\img\dashboard\doctor-4.jpg" alt="people">
            <div class="ms-profile-user-info">
                <h3 class="ms-profile-username text-white">Nombre completo</h3>
                <h6 class="ms-profile-role text-white">Ocupacion del paciente</h6>
            </div>

        </div>

        <div class="tab-content">
            <div class="tab-pane" id="tab1">
            </div>
            <div class="tab-pane" id="tab2">
            </div>
            <div class="tab-pane" id="tab3">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-7 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-body">
                    <h2 class="section-title">Antecedentes clìnicos</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.
                    </p>

                </div>
            </div>
        </div>
        <div class="col-xl-5 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-body">

                    <h2 class="section-title">Datos Personales</h2>
                    <table class="table ms-profile-information">
                        <tbody>
                            <tr>
                                <th scope="row">Nombre completo</th>
                                <td>Chihoo Hwang</td>
                            </tr>
                            <tr>
                                <th scope="row">Cumpleaños</th>
                                <td>January 25th, 1996</td>
                            </tr>
                            <tr>
                                <th scope="row">Numero de telefono</th>
                                <td>+123 456 789</td>
                            </tr>
                            <tr>
                                <th scope="row">Correo electronico</th>
                                <td>example@mail.com</td>
                            </tr>

                            <tr>
                                <th scope="row">Direccion</th>
                                <td>New York, USA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">

            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Motivos de cita</h6>
                    <label class="d-block mt-3"><a href="#" class="btn-link" data-toggle="modal" data-target="#modal-12">Añadir motivo de cita</a></label>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-2" class="table table-striped thead-primary w-100"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
    <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="flaticon-secure-shield d-block"></i>
                <h1>Ingresar motivo de cita</h1>
                <p> Llenar todos los campos</p>
                <form method="post">
                    <div class="ms-form-group has-icon">
                        <input type="text" placeholder="Nombre del tratamiento" class="form-control" name="nombre" value="">
                        <i class="material-icons"></i>
                    </div>
                    <div class="ms-form-group has-icon">
                        <input type="text" placeholder="Costo del tratamiento" class="form-control" name="costo" value="">
                        <i class="material-icons"></i>
                    </div>
                    <button type="submit" class="btn btn-primary shadow-none">Agregar mottivo</button>
                    <button type="submit" class="btn btn-primary shadow-none">Cancelar</button>
                </form>
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
<!-- Medjestic core JavaScript -->
<script src="\assets\js\framework.js"></script>
<!-- Settings -->
<script src="\assets\js\settings.js"></script>


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

@stop
@stop
