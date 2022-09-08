<?php
include  ('C:\\xampp\htdocs\puntoventa\controladores\conexion.php');
//include  ("/xampp/htdocs/puntoventa/controladores/conexion.php"); asi tambien se pude poner
$email_usuario = $_POST["email_usuario"];
$nombre_usuario= $_POST["nombre_usuario"];
$pw_usuario = $_POST["pw_usuario"];
$usr_usuario = $_POST["usr_usuario"];

$insertar = "INSERT INTO usuario (usuario,nombre_usuario,pw_usuario,usr_usuario) VALUES ('$email_usuario', '$nombre_usuario', '$pw_usuario', '$usr_usuario')";

$resultado = mysqli_query($conexion,$insertar);

if($resultad){
    echo "<script>alert('Se registro usuario con exito')</script>;
    window.location='/'<script>";
}
else{
    if($resultad){
        echo "<script>alert('No se puedo registrar')</script>;
        window.history.go(-1)<script>";
    }
}
?>