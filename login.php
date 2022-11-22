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
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="public/template/images/logito2.png" alt="logo">
              </div>
              <h4>COOPERATIVA</h4>
              <h6 class="font-weight-light">Iniciar Sesión.</h6>
              <form class="pt-3" method="POST" action="login.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="user" id="user" placeholder="Usuario SFI">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="clave" id="clave" placeholder="Contraseña">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-facebook btn-lg font-weight-medium auth-form-btn" value="Registrar">
                </div>
                
              </form>

              <?php
                  if(empty($_POST["user"]) || empty($_POST["clave"])){
                    echo 'error';
                    // header('Location: index.php?mensaje=falta');
                    // exit();
                  }

                  $user = $_POST["user"];
                  echo $user;
                  $clave = $_POST["clave"];

                  $curl = curl_init();

                  curl_setopt_array($curl, array(
                    CURLOPT_URL => 'http://181.176.156.77:8085/AppiRestFulSFI/api/WebService/getLogin/login/'.$user.'/'.$clave,
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

                  curl_close($curl);
                  echo $response;
                ?>
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

</html>
