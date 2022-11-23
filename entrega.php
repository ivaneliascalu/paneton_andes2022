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
                            <button class="btn btn-primary" onclick="cargarSocio()" type="button">Buscar</button>
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
                              <div class="form-check form-check-success">
                                <input type="checkbox" class="form-check-input">    
                              </div>
                          </div>
                          <div class="form-group">                      
                              <div class="form-check form-check-success">
                              <button type="submit" class="btn btn-primary me-2">Enviar</button>
                              <button class="btn btn-light">Cancelar</button>    
                              </div>
                          </div>
                         
                       
                      </div>
                    </form>
                 
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://cooperativalosandes.com.pe/" target="_blank"> COOPAC Los Andes </a>2022</span>
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">atencionalsocio@cooperativalosandes.com <a href="https://www.bootstrapdash.com/" target="_blank"> INFORMACIÓN
                      </a> Jr. Cora Cora nº 319-321 Chalhuanca 945 347 147 
                  </span>
                </div>
              </div>
            </div>
            <div>        
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       
        <!-- partial -->
        
  
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
      </div>
  </div>
</body>

<script>
    $('#buscar').click(function(){
      dnibusqueda=$('#documentobusqueda').val();
      $.ajax({
        url:'Controlador/busquedadni.php',
        type:'post',
        data:'dni='+dnibusqueda,
        dataType:'json',
        success:function(r){
          if(r.dni==dnibusqueda){
            $('#codigoagencia').val(r.codigoAgencia);
            $('#correo').val(r.correo);
            $('#direccion').val(r.direccion);
            $('#dni').val(r.dni);
            $('#fechanacimiento').val(r.fechaNacimiento);
            $('#nombres').val(r.nombres);
            $('#profesion').val(r.profesion);
            $('#telefono').val(r.telefono);
          }
          else{
            alert('error');
          }
        }
      })
    })
</script>
</html>


