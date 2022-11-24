<?php
//   require_once('Controlador/coneccionbd.php');
//   if(isset($_POST["submit"])){

//     $nombreProducto=$_POST["nombreProducto"];
//     $unidadMedida=$_POST["unidadMedida"];
//     $descProducto=$_POST["descProducto"];
//     $Estado=$_POST["Estado"];

//     $sql="INSERT INTO producto (nombreProducto,unidadMedida,descProducto,Estado)
//     value('$nombreProducto','$unidadMedida','$descProducto','$Estado')";

//     $result=mysqli_query($con,$sql);

//     if($result){
      
//     }
//     else{
//       die(mysqli_error($con));
//     }
//   }
include "Controlador/coneccionbd.php";
    $nombreProducto=$_POST["nombreProducto"];
    $unidadMedida=$_POST["unidadMedida"];
    $descProducto=$_POST["descProducto"];
    $Estado=$_POST["Estado"];

    $sql="INSERT INTO producto (nombreProducto,unidadMedida,descProducto,Estado)
    VALUES ('{$nombreProducto}','{$unidadMedida}','{$descProducto}','{$Estado}')";
    if($con->query($sql)){
        echo "Data save";
    }
    
?>