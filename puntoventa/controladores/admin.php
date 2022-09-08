<?php
include ('C:\\xampp\htdocs\puntoventa\controladores\conexion.php');

$nombre_admin = $_POST["nombre_admin"];
$usr_admin = $_POST['usr_admin'];
$pw_admin = $_POST['pw_admin'];
$email_admin = $_POST['email_admin'];


$insertar = "INSERT INTO sysadmin (nombre_admin, usr_admin, pw_admin, email_admin) VALUES   ('$nombre_admin', '$usr_admin', '$pw_admin', '$email_admin')";

$resultado = mysqli_query($conexion,$insertar);
echo "$resultado";


if($resultado){
    echo "<script>alert('Se registro usuario con exito');
    window.location='/puntoventa/vistas/sysadmin.php'; </script>";
}
else{
    if($resultado){
        echo "<script>alert('No se puedo registrar')</>;
        window.history.go(-1);</script>";
    }
}

?>