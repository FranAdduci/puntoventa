<?php
include  ("/xampp/htdocs/puntoventa/controladores/conexion.php");

if(!empty($_POST["btningresar"])){
    if(!empty($_POST["username"]) and !empty($_POST["password"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM sudo WHERE username='$username' and password='$password' ";
        $resultado = mysqli_query($conexion, $qry);
        if($datos=$resultado->fetch_object())
        {
            header("location: /puntoventa/controladores/admin.php");
        }
    }else{
        echo "<div class='alert alert-danger'> Error contraseña o password invalidos</div>";
    }
}

/*
$username = $_POST['username'];
$password = $_POST['password'];

$qry = "SELECT * FROM sudo WHERE username='$username' and password='$password' ";
$resultado = mysqli_query($conexion, $qry);

//$nro = mysqli_num_rows($resultado);
if($datos=$resultado->fetch_object()){
    header("location: /puntoventa/controladores/admin.php");
}else{
    echo "<div class='alert alert-danger'>Error contraseña o password invalidos</div>";
}
*/

?>