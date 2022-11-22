<?php

$curl = curl_init();
$dni=$_POST['dni'];
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://192.168.100.31:8085/AppiRestFulSFI/api/empleados/'.$dni,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: askjdLKJASLK65fd6asa4562ASDasdJJdd152'
  ),
));

$response = curl_exec($curl);

//curl_close($curl);
echo $response;

?> 

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                  <form class="forms-sample" action="entrega.php" method="GET">
                    <div class="form-group">
                        <div class="input-group">
                        <input type="text" class="form-control" name="dni" id="dni" placeholder="DNI">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="">Codigo Agencia</label>
                      <input type="text" class="form-control" name="codigoAgencia" id="codigoAgencia" value={{$response->codigoAgencia}}>
                    </div>
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Nombres">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
      </div>
    </div>
</body>
</html>


