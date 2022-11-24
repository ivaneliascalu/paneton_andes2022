<?php

include("Controlador/coneccionbd.php");
$con=conectar();

$idProducto=$_POST['idProducto'];
$nombreProducto=$_POST['nombreProducto'];
$unidadMedida=$_POST['unidadMedida'];
$descProducto=$_POST['descProducto'];
$Estado=$_POST["Estado"];

$sql="UPDATE producto SET  nombreProducto='$nombreProducto',unidadMedida='$unidadMedida',descProducto='$descProducto',Estado='$Estado' WHERE idProducto='$idProducto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>