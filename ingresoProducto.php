<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registro Producto</title>
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
                  <h4 class="card-title">Registro Producto</h4>                  
                  <form class="form-control"> 
                          <br>
                              <div class="row">                                  
                                  <div class="col-3">
                                        <span>Producto</span>                          
                                        <input type="text" class="form-control" name="nombreProducto" id="direccion" >                                    
                                  </div>                                  
                              </div>
                              <br>
                              <div class="row">
                                  <div class="col-3">                                    
                                        <span>Cantidad</span>                          
                                        <input type="number" autocomplete="off" class="form-control" name="nombres" id="nombres" class="form-control" min="1" max="999999">
                                            
                                  </div>
                                  <div class="col-3">
                                        <span>Codigo Agencia</span>                          
                                        <input type="text" autocomplete="off" class="form-control" name="direccion" id="direccion" >
                                    
                                  </div>
                                  
                              </div>
                              <br>
                              <div class="row">
                                    <div class="col-6">
                                        <span>Descripcion Producto</span>                          
                                        <input type="text" autocomplete="off" name="correo" id="correo" class="form-control">                                          
                                                            
                                    </div>  
                                </div>
                              <br>
                              <div class="row">
                                  <div class="col-3">                                    
                                        <span>Ejecutivo</span>                          
                                        <input type="text" autocomplete="off" class="form-control" name="Ejecutivo"  class="form-control" >    
                                  </div>
                                  <div class="col-3">
                                        <span>Fecha</span>                          
                                        <input type="date" class="form-control" name="fecha"  class="form-control" >   
                                    
                                  </div>
                                  
                              </div>
                                <div class="row-2">                                        
                                      <br>
                                      <br>
                                      <div class="row-3">
                                          <div class="col-2">
                                                <div class=" form-switch">  
                                                      <input type="checkbox" class="form-check-input check" name="Estado"> 
                                                      <label for="check1" class="form-check-label">Estado</label>
                                                </div>
                                          </div>
                                      </div> 
                                </div>
                                <br>
                              
                          
                          <div class="form-group">                      
                              <div class="form-check form-check-success">
                              <button type="submit" class="btn btn-primary me-2">Enviar</button>
                          </div>
                          
                        </div>                        
                       
                    
                    </form>
                 
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? <a href="https://cooperativalosandes.com.pe/" target="_blank"> COOPAC Los Andes </a>2022</span>
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">atencionalsocio@cooperativalosandes.com <a href="https://www.bootstrapdash.com/" target="_blank"> INFORMACI??N
                      </a> Jr. Cora Cora n?? 319-321 Chalhuanca 945 347 147 
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

</html>


