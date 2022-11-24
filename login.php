<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Iniciar Sesion</title>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="public/template/images/logito2.png" alt="logo">
              </div>
              <h6 class="font-weight-light">USUARIO</h6>
              <form class="form-sample" method="post">
                <div class="form-group" >
                  <input type="text" class="form-control form-control-lg" name="user" id="user" placeholder="Ingrese Usuario SFI">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="clave" id="clave" placeholder="Ingrese Contraseña">
                </div>
                <div class="form-group">
                  <h6 class="font-weight-light">AGENCIA</h6>
                    <select class="form-control" id="agencias">
                      <option>SELECCIONE AGENCIA</option>
                    </select>
                </div>
                <div class="mt-3">
                  <button type="button" id="buscar" class="btn btn-block btn-facebook btn-lg font-weight-medium auth-form-btn">
                    INGRESA
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="public/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <script src="public/template/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- inject:js -->
  <script src="public/template/js/off-canvas.js"></script>
  <script src="public/template/js/hoverable-collapse.js"></script>
  <script src="public/template/js/template.js"></script>
  <!-- endinject -->
</body>
<script>
  $('#user').change(function(){
    console.log("XD");
    user=$('#user').val();
    
    $.ajax({
      url:'controlador/agencias.php',
      type:'post',
      data: {user: user},
      dataType:'json',
      success:function(r){
      console.log(r);
        if (r!=='') {
          $(r).each(function(index,value){
            //FALTA ORDENAR POR ID DE AGENCIA
            $('#agencias').append(`<option value="${value.codigoAgencia}"> ${value.descripcionAgencia} </option>`)
          })
        }
        else{
          Swal.fire({
            icon: 'error',
            title: 'Credenciales Incorrectas',
            text: 'Intente Nuevamente',
          })
        }
      }
    })
  })
  $('#clave').change(function(){
    user=$('#user').val();
    clave=$('#clave').val();

    // console.log(user);
    // console.log(clave);
    $.ajax({
      url:'controlador/validar_login.php',
      type:'post',
      // data:'user='+user,
      data: {user: user,clave: clave},
      dataType:'json',
      success:function(r){
        if(r.error=='000'){
          $.ajax({
            url:'controlador/agencias.php',
            type:'post',
            data: {user: user},
            dataType:'json',
            success:function(r){
              console.log(r);
              $(r).each(function(index,value){
                //FALTA ORDENAR POR ID DE AGENCIA
                $('#agencias').append(`<option value="${value.codigoAgencia}"> ${value.descripcionAgencia} </option>`)
              })
            }
          })
        }
        else{
          Swal.fire({
            icon: 'error',
            title: 'Credenciales Incorrectas',
            text: 'Intente Nuevamente',
            
          })
        }
      }
    })
  })
</script>
<script>
  $('#buscar').click(function(){
    $.cookie("user", "JLLOCC LLA");
    $(location).prop('href', 'index.php')
  })
</script>
</html>
