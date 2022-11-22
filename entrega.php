<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="public/template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="public/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="public/template/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="public/template/images/favicon.png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">

      </div>
    </div>
    <!-- partial:./partials/_sidebar.html -->
    <?php 
    include 'sidebar.php';
    ?>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <?php 
        include 'navbar.php';
      ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Datos de Socio</h4>
                  <p class="card-description">
                    Cargar datos de Socio
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="DNI">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Buscar</button>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                      <label for="">Apellido Paterno</label>
                      <input type="text" class="form-control" id="app" placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group">
                      <label for="">Apellido Materno</label>
                      <input type="text" class="form-control" id="apm" placeholder="Apellido Materno">
                    </div>
                    <div class="form-group">
                      <label for="">Email address</label>
                      <input type="email" class="form-control" id="correo" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                      <label for="">Genero</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Masculino</option>
                          <option>Femenino</option>
                        </select>
                      </div>
                    
                    <div class="form-group">
                      <label for="">Zonal</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Zonal">
                    </div>

                    <div class="form-group">
                    <label for="">Recepción</label>
                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Recibió Panetón !
                            <i class="input-helper"></i></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Enviar</button>
                    <button class="btn btn-light">Cancelar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php 
          include 'footer.php';
          ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       
        <!-- partial -->
        
  
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
      </div>
    </div>
</body>
</html>

