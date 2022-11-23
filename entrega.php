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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                      
                      <div class="container">
                        <div class="row">

                          <div class="col">
                            <div class="col-md-auto">
                                <span>Buscar por DNI</span>
                                <input type="text" class="form-control" id="documentobusqueda" placeholder="DNI"> 
                                <div class="col-md-auto">                
                                <button class="btn btn-primary" id="buscar"  type="button">Buscar</button>  
                                </div>                   
                            </div>
                               
                          </div>
                          <div class="col-md-auto">
                              <span>Codigo Agencia</span>
                              <input type="text" autocomplete="off" name="codigoagencia" class="form-control" id="codigoagencia">
                            
                          </div>
                          
                        </div>
                          <br>
                          <div class="content-wrapper bg-secondary text-white"  > 
                              <div class="row">
                                  <div class="col-md-auto">
                                    <label>
                                        <span>Correo</span>                          
                                        <input type="email" autocomplete="off" name="correo" id="correo" class="form-control">    
                                    </label>                          
                                  </div>
                                  <div class="col-md-auto">                     
                                      <label>
                                        <span>Direccion vivienda</span>                          
                                        <input type="text" autocomplete="off" class="form-control" name="direccion" id="direccion" >
                                      </label>
                                  </div>
                                  <div class="col-md-auto">                     
                                      <label>
                                        <span>DNI</span>                          
                                        <input type="text" autocomplete="off" class="form-control" name="dni" id="dni" >
                                      </label>
                                  </div>
                              </div>


                              <div class="row">
                                    <div class="col-md-auto">                      
                                        <label>
                                          <span>Nombres</span>                          
                                          <input type="text" autocomplete="off" class="form-control" name="nombres" id="nombres" class="form-control">
                                        </label>
                                    </div>
                                    <div class="col-md-auto">                      
                                        <label>
                                          <span>Profesion</span>                          
                                          <input type="text" autocomplete="off" class="form-control" name="profesion" id="profesion" class="form-control">
                                        </label>
                                    </div>
                                
                                    <div class="col-md-auto">                      
                                        <label>
                                          <span>telefono</span>                          
                                          <input type="text" autocomplete="off" class="form-control" name="telefono" id="telefono" class="form-control">
                                        </label>
                                    </div>
                              </div>
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


