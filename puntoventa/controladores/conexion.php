<?php
$user="root";   
$password="";
$server="localhost";
$db="pointsale";

$conexion = mysqli_connect($server,$user,$password,$db);
if($conexion->connect_error){
    die("Error connecting to pointsale".$conexion->connect_error);
    }
    else{
        echo "La BD esta conectada.";
    }
?>