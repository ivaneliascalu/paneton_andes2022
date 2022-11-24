<?php
    $user="root";
    $pass="";
    $server="localhost";
    $db="navidad";  
$con=new mysqli($server,$user,$pass,$db);
if(!$con){
    die(mysqli_error($con));
}
else{
    
}
?>