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
@stop
@section('contenido')
        <div class="col-md-12">
          <nav aria-label="breadcrumb" class="ms-panel-custome">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="/consola"><i class="material-icons">home</i> Inicio</a></li>
              <li class="breadcrumb-item"><a href="#">Socios</a></li>
              <li class="breadcrumb-item active" aria-current="page">Listado de socios</li>
            </ol>

          </nav>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-1.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Michael Sullivan </h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">Ophthalmologist</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span>
                     United States, San Francisco</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-2.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Linda Barrett</h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">Dentist</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span>
                    United States, San Francisco</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Ronald Jacobs</h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">Oncologist</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span> United States, San Francisco</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-4.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Mark Hunter </h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">Cardiologist</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span> United States, New York</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-5.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Cristina Groves</h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">Psychiatrist</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span> United States, California</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-1.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Justin Parker</h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">Pediatrics</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span> United States, New York</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-2.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Shirley Willis </h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">Radiologist</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span> United States, San Francisco</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Diana Bailey</h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">General Surgery</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span> United States, California</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="..\..\assets\img\dashboard\doctor-4.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Albert Sandoval</h6>
                  <div class="dropdown float-right">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="ms-dropdown-list">
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>View Details</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Assign</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Edit</span>
                          </div>
                        </a>
                        <a class="media p-2" href="#">
                          <div class="media-body">
                            <span>Delete</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-12 my-1 text-disabled">Neurologist</p>
                  <h6 class="mt-2">
                    <span class="fs-14">
                      <i class="fas fa-map-marker-alt"></i>
                    </span> United States, San Francisco</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Chat Widget (Active Chats) -->

        <!-- Followers Widget -->

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