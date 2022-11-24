<?php

include("Controlador/coneccionbd.php");
$con=conectar();

$idProducto=$_GET['id'];

$sql="DELETE FROM producto  WHERE idProducto='$idProducto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
