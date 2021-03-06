<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>JDentist</title>
      <!-- Iconic Fonts -->
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
   </head>
   <body class="ms-body ms-primary-theme ms-logged-out">
      <!-- Setting Panel -->
      <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
         <i class="flaticon-gear"></i>
      </div>
      <div class="ms-settings-panel ms-d-block-lg">
         <div class="row">
            <div class="col-xl-4 col-md-4">
               <h4 class="section-title">Customize</h4>
               <div>
                  <label class="ms-switch">
                  <input type="checkbox" id="dark-mode">
                  <span class="ms-switch-slider round"></span>
                  </label>
                  <span> Dark Mode </span>
               </div>

            </div>
            <div class="col-xl-4 col-md-4">
               <h4 class="section-title">Keyboard Shortcuts</h4>
               <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
               <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
               <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
            </div>
         </div>
      </div>
      <!-- Preloader -->
      <div id="preloader-wrap">
         <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
         </div>
      </div>
      <!-- Overlays -->
      <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
      <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
      <!-- Sidebar Navigation Left -->

      <!-- Main Content -->
      <main class="body-content">
         <!-- Navigation Bar -->
         <nav class="navbar ms-navbar">

         </nav>
         <!-- Body Content Wrapper -->
         <div class="ms-content-wrapper ms-auth">
            <div class="ms-auth-container">
               <div class="ms-auth-col">
                  <div class="ms-auth-bg"></div>
               </div>
               <div class="ms-auth-col">
                  <div class="ms-auth-form">
                     <form class="needs-validation" novalidate="">
                        <h1>Iniciar sesión en cuenta</h1>
                        <p>Ingrese su email y contraseña para continuar</p>
                        <div class="mb-3">
                           <label for="validationCustom08">Correo electronico</label>
                           <div class="input-group">
                              <input type="email" class="form-control" id="validationCustom08" placeholder="Correo electronico" required="">
                              <div class="invalid-feedback">
                                 Please provide a valid email.
                              </div>
                           </div>
                        </div>
                        <div class="mb-2">
                           <label for="validationCustom09">Contraseña</label>
                           <div class="input-group">
                              <input type="password" class="form-control" id="validationCustom09" placeholder="Contraseña" required="">
                              <div class="invalid-feedback">
                                 Please provide a password.
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           
                           <label class="d-block mt-3"><a href="#" class="btn-link" data-toggle="modal" data-target="#modal-12">Olvide mi contraseña?</a></label>
                        </div>
                        <button class="btn btn-primary mt-4 d-block w-100" type="submit">Iniciar sesión</button>

                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- Forgot Password Modal -->
         <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
            <div class="modal-dialog modal-dialog-centered modal-min" role="document">
               <div class="modal-content">
                  <div class="modal-body text-center">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <i class="flaticon-secure-shield d-block"></i>
                     <h1>Olvide mi contraseña?</h1>
                     <p> Ingrese su correo electrónico para recuperar su contraseña </p>
                     <form method="post">
                        <div class="ms-form-group has-icon">
                           <input type="text" placeholder="Correo electronico" class="form-control" name="forgot-password" value="">
                           <i class="material-icons">email</i>
                        </div>
                        <button type="submit" class="btn btn-primary shadow-none">Restablecer la contraseña</button>
                     </form>
                  </div>
               </div>
            </div>
             
         </div>
      </main>
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
   </body>
</html>
