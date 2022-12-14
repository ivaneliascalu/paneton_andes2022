<?php 
    include("Controlador/coneccionbd.php");
    $con=conectar();
    $sql="SELECT *  FROM subagencia";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sub Agencia</title>
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
  
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>


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
                  <h4 class="card-title">Registro SubAgencia</h4>  
                            
                  <form class="form-control" action="producto.php" method="POST">                   
                                    <div class="row"> 
                                        <div class="col-4">
                                            <label for="">Agencia</label> 
                                              <select class="form-select" aria-label="Default select example" name="Estado" id="Estado"> 
                                                  <option value="1">Abancay</option>
                                                  <option value="0">Chalhuanca</option>                                                  
                                              </select>                                  
                                        </div>                                  
                                        <div class="col-3">
                                              <span>Nombre SubAgencia</span>
                                              <input type="text" class="form-control ds-input" name="codAgencia" id="codAgencia" placeholder="Ingrese Nombre...">   
                                        </div>
                                        <div class="col-2">
                                            <span>Codigo SubAgencia</span>                          
                                            <input type="text" name="descAgencia" id="descAgencia" class="form-control" placeholder="Ingrese Codigo...">                                          
                                                                
                                        </div>                                          
                                    </div>
                                  
                                    <br>
                                    <br>
                                   
                                    <div class="row">
                                        <div class="col-6">
                                            <span>Descripcion subAgencia</span>                          
                                            <input type="text" name="descAgencia" id="descAgencia" class="form-control" placeholder="Ingrese Descripcion...">                                          
                                                                
                                        </div>  
                                        <div class="col-3">
                                            <label for="">Estado</label> 
                                              <select class="form-select" aria-label="Default select example" name="Estado" id="Estado"> 
                                                  <option value="1">Activo</option>
                                                  <option value="0">Inactivo</option>                                                  
                                              </select>                                  
                                          </div>
                                    </div>
                                  <br>                              
                                  <br>
                                    
                                      
                                    <div class="form-group">                      
                                        <div class="form-check form-check-success">
                                        <button type="submit" name="submit" class="btn btn-primary me-2">Registrar</button>
                                    </div>
                              
                            </div>
                      </form>
                      <div class="responsive">
                            <table id="tabla" class="table table-sm" cellspacing="0" width="100%">                                
                                  <thead class="table-success" >
                                      <tr>
                                          <th>Codigo</th>
                                          <th>Nombre</th>
                                          <th>Cantidad</th>
                                          <th>Descripcion</th>
                                          <th>Estado</th>
                                          <th>editar</th>
                                          <th></th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                          <?php
                                              while($row=mysqli_fetch_array($query)){
                                          ?>
                                              <tr>
                                                  <th><?php  echo $row['idProducto']?></th>
                                                  <th><?php  echo $row['nombreProducto']?></th>
                                                  <th><?php  echo $row['unidadMedida']?></th>
                                                  <th><?php  echo $row['descProducto']?></th>
                                                  <th><?php  echo $row['Estado']?></th>   
                                                  <th><a href="Controlador/crudproducto/editar.php?id=<?php echo $row['idProducto'] ?>" class="btn btn-info">Editar</a></th>
                                                  <th><a href="Controlador/crudproducto/eliminar.php?id=<?php echo $row['idProducto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                              </tr>
                                          <?php 
                                              }
                                          ?>
                                  </tbody>
                              </table>
                      </div> 
                 
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
        
      </div>
  </div>
  
    <!-- Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      <!-- Datatables responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#tabla').DataTable({
                responsive: true
            });
        });
    </script>
</body>

</html>


