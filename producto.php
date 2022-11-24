<?php
  require_once('Controlador/coneccionbd.php');
  if(isset($_POST["submit"])){

    $nombreProducto=$_POST["nombreProducto"];
    $unidadMedida=$_POST["unidadMedida"];
    $descProducto=$_POST["descProducto"];
    $Estado=$_POST["Estado"];

    $sql="INSERT INTO producto (nombreProducto,unidadMedida,descProducto,Estado)
    value('$nombreProducto','$unidadMedida','$descProducto','$Estado')";

    $result=mysqli_query($con,$sql);

    if($result){
      
    }
    else{
      die(mysqli_error($con));
    }
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Producto</title>
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
                  <h4 class="card-title">Producto</h4>                  
                      <form class="form-control" action="producto.php" method="POST">                  
                                  <div class="row">                                   
                                        <div class="col-4">
                                              <span>Nombre Producto</span>
                                              <input type="text" class="form-control ds-input" name="nombreProducto" id="nombreProducto" placeholder="Ingrese Producto...">   
                                        </div> 
                                    </div>
                                  
                                    <br>
                                    <br>
                                    <div class="row">                                        
                                        <div class="col-4">
                                            <label for="">Unidad de Medida</label> 
                                            <select class="form-select" aria-label="Default select example" name="unidadMedida" id="unidadMedida">
                                            <option selected disabled="disabled">Seleccione Medida</option>
                                            <option value="1">1 Producto</option>
                                            <option value="2">2 Productos</option>
                                            <option value="3">3 Productos</option>
                                            <option value="4">4 Productos</option>
                                            <option value="5">5 Productos</option>
                                            <option value="6">6 Productos</option>
                                            <option value="7">7 Productos</option>
                                            <option value="8">8 Productos</option>
                                            <option value="9">9 Productos</option>
                                        </select>                                  
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-4">
                                            <span>Descripcion Producto</span>                          
                                            <input type="text" name="descProducto" id="descProducto" class="form-control">                                          
                                                                
                                        </div>  
                                    </div>
                                  <br>                              
                                  <br>
                                    <div class="row-2">                                      
                                          <br>                                      
                                          <div class="row-3">
                                              <div class="col-2">
                                                    <div class=" form-switch">  
                                                          <input type="checkbox" class="form-check-input check" name="Estado" id="estado" value="1" > 
                                                          <label for="check1" class="form-check-label">Estado</label>
                                                    </div>
                                              </div>
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
        
      </div>
  </div>
</body>
<script>
  $(document).ready(function() {
    $("#submit").on("click", function() {
        var condiciones = $("#Estado").is(":checked");
        if (!condiciones) {
            alert("Debe aceptar las condiciones");
            event.preventDefault();
        }
    });
});
</script>
</html>


