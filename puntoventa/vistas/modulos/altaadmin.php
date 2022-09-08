<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Distribuidora Alpha</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <!-- https://getbootstrap.com/docs/5.2/forms/validation/-->
    <!-- Formulario para Alta Admin-->
    <div class="container-add">
        <h2 class="container-title">Registrar Admin</h2>
        <form name = "alta" method="post" class="container__form" action="http://localhost/puntoventa/controladores/admin.php">
            <label for="" class="control__label">Nombre:</label>
            <input name="nombre_admin" type="text" class="container__input">
            
            <label for="" class="control__label">Usuario:</label>
            <input name="usr_admin" type="text" class="container__input">
            
            <label for="" class="control__label">Password:</label>
            <input name="pw_admin" type="text" class="container__input">

            <label for="" class="control__label">Email:</label>
            <input name="email_admin" type="text" class="container__input">

            <input class="container__submit" type="submit" value="Registrar">
           
        </form>
    </div>
    
    <!-- Fin Formulario para Alta Admin-->
</body>


</html>