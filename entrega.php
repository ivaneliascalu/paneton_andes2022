<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Entrega Producto</title>
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
                  <form class="form-control">                  
                                <div class="row">
                                      <div class="col-3" >                                     
                                          <span>Cargar datos de Socio por DNI</span>
                                          <input type="search" class="form-control ds-input"  id="documentobusqueda" placeholder="Busqueda por DNI..."> 
                                          <div class="col">                
                                              <button class="btn btn-primary" id="buscar"  type="button">Buscar</button>  
                                          </div> 
                                      </div>  
                                      <div class="col-3">
                                        <span>Fecha</span>
                                        <input type="date" autocomplete="off" name="fechahoy" class="form-control">                                  
                                      </div> 
                                </div>                             
                        
                                <br>
                                <br>
                                
                                <div class="row">
                                  <div class="col-4">                                    
                                        <span>Nombre Socio</span>                          
                                        <input type="text" autocomplete="off" class="form-control" name="nombreRazonSocial" id="nombreRazonSocial" class="form-control" min="1" max="999999">
                                            
                                  </div>
                                  <div class="col-2">
                                        <span>DNI socio</span>                          
                                        <input type="text" autocomplete="off" class="form-control" name="numeroDocumentoIdentidad" id="numeroDocumentoIdentidad" >                                    
                                  </div>
                                  
                              </div>
                              <br>
                              <br>
                                <div class="row">
                                    <div class="col-4">                                    
                                              <span>Producto</span>                                         
                                              <select class="form-select" aria-label="Default select example" name="unidadMedida">
                                                <option selected disabled="disabled">Seleccione Producto</option>
                                                <option value="1">Paneton</option>
                                                <option value="2">2 Productos</option> 
                                              </select>                                                            
                                    </div>
                                    <br> 
                                    <div class="col-2">
                                        <span>Codigo socio</span>                          
                                        <input type="text" autocomplete="off" class="form-control" name="codigoSocio" id="codigoSocio" >                                    
                                     </div>                                  
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                      <div class="col-3">  
                                            <span>Cantidad Producto Entregado</span>                          
                                            <input type="number" autocomplete="off" class="form-control" name="nombres" id="nombres" class="form-control" min="1" max="999999">
                                            
                                      </div>
                                    <div class="col-3">
                                        <span>Ejecutivo</span>                          
                                        <input type="text" autocomplete="off" class="form-control" name="ejecutivo" id="direccion" >                                    
                                     </div>                                  
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                        <div class="col-6">
                                            <span>Mensaje</span>                          
                                            <input type="text" name="descProducto" class="form-control">                                          
                                                                
                                        </div>  
                                </div>
                                <br>
                                <div class="row-2">
                                      
                                      <br>
                                      <br>
                                      <div class="row-3">
                                          <div class="col-2">
                                                <div class=" form-switch">  
                                                      <input type="checkbox" class="form-check-input check" > 
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
   $("#documentobusqueda").keypress(function(e) { 
    var code = (e.keyCode ? e.keyCode : e.which);
     if(code == 13){
      dnibusqueda=$('#documentobusqueda').val();
      $.ajax({
        url:'Controlador/busquedadni.php',
        type:'post',
        data:'dni='+dnibusqueda,
        dataType:'json',
        success:function(r){                   
          if(r[0].numeroDocumentoIdentidad==dnibusqueda){
            $('#nombreRazonSocial').val(r[0].nombreRazonSocial);
            $('#numeroDocumentoIdentidad').val(r[0].numeroDocumentoIdentidad);
            $('#codigoSocio').val(r[0].codigoSocio);
          }
          else{
            alert('error');
          }
        }
      })
      return false; 
      }
    });
</script>

<script> 
    $('#buscar').click(function(){
      dnibusqueda=$('#documentobusqueda').val();      
      $.ajax({
        url:'Controlador/busquedadni.php',
        type:'post',
        data:'dni='+dnibusqueda,
        dataType:'json',
        success:function(r){          
          if(r[0].numeroDocumentoIdentidad==dnibusqueda){            
            $('#nombreRazonSocial').val(r[0].nombreRazonSocial);
            $('#numeroDocumentoIdentidad').val(r[0].numeroDocumentoIdentidad);
            $('#codigoSocio').val(r[0].codigoSocio);
          }
          else{
            alert('error');
          }
        }
      })
    })
</script>
</html>


