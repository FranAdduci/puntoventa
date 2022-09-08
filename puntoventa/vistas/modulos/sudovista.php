<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>sudo</title>
</head>
<body>
    <div class="container-sudo">
        <h2 class="container-title">Login SUDO</h2>
            <?php 
                include  ("/xampp/htdocs/puntoventa/controladores/conexion.php");               
                include ("/xampp/htdocs/puntoventa/controladores/sudo.php");
            ?>
            <form class= "fromulario-login" method="post" action="" >
                <label for="" class="control__label">Usuario:</label>
                <input name="username" type="text" placeholder="Usuario">

                <label   label for="" class="control__label">Password:</label>
                <input name="password" type="text" placeholder="Password">

                <input name ="btningresar" type="submit" value="Iniciar Sesión">
                <input type="submit" value="Cancelar">

                <p><a href="#">¿Olvidaste Contrase o Usuario?</a></p>
        
            </form>
    </div>
</body>
</html>