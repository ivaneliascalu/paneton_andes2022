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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5 text-center">
              <img src="public/template/images/faces/face13.jpg" class="lock-profile-img" alt="img">
              <form class="pt-5">
                <div class="form-group">
                    <h6 class="font-weight-light">USUARIO</h6>
                  <input type="text" class="form-control text-center" id="user" placeholder="USUARIO SFI">
                </div>
                <div class="form-group">
                  <h6 class="font-weight-light">AGENCIA</h6>
                    <select class="form-control text-center" id="agencias">
                        <option class="form-control text-center">SELECCIONE AGENCIA</option>
                    </select>
                </div>
                <div class="mt-5">
                <button type="button" class="btn btn-block btn-facebook btn-lg font-weight-medium">INGRESAR</button>
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
    user=$('#user').val();
    $.ajax({
      url:'controlador/agencias.php',
      type:'post',
      data: {user: user},
      dataType:'json',
      success:function(r){
      console.log(r);
        if (r!=='[]') {
          $(r).each(function(index,value){
            //FALTA ORDENAR POR ID DE AGENCIA
            $('#agencias').focus().append(`<option class value="${value.codigoAgencia}"> ${value.descripcionAgencia} </option>`)
          })
          
        }
        else{
            console.log("");
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
</html>
