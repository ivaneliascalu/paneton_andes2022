<?php
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="navidad";  
    $con=new mysqli($server,$user,$pass,$db);
    if(!$con){
        die(mysqli_error($con));
    }
    else{
        return $con;
    }
}
?>
<!-- <?php
// function conectar(){
//     $host="localhost";
//     $user="root";
//     $pass="";

//     $db="navidad";
//     $con=mysqli_connect($host,$user,$pass);
//     mysqli_select_db($con,$db);

//     return $con;
// }
?> -->