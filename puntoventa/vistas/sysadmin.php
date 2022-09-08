<?php
include  ('C:\\xampp\htdocs\puntoventa\controladores\conexion.php');
//Consulta para mostrar la tabla de todos los Admins.
$qry = "SELECT * FROM sysadmin";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Vista Administrador</title>
</head>
<body>
    <!--Inicio Tabla -->
    <h5>Tabla Sysadmin</h5>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">nombre_admin</th>
      <th scope="col">usr_admin</th>
      <th scope="col">pw_admin</th>
      <th scope="col">email_admin</th>
    </tr>
  </thead>
  <tbody>       
        
        <?php 
        $resultado=mysqli_query($conexion,$qry);                
        while($row=mysqli_fetch_assoc($resultado)){ ?>
        <tr>
        <td > <?php echo $row["nombre_admin"]; ?></td>
        <td > <?php echo $row["usr_admin"]; ?></td>
        <td > <?php echo $row["pw_admin"]; ?></td>
        <td > <?php echo $row["email_admin"]; ?></td>  
        <tr>      
        <?php } ?>

  </tbody>
</table>
    <!--Fin Tabla -->
       
</body>
</html>
