<?php
include_once '../lib/helpers.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <form id="login" style="padding-top:10%;"class="formulario login form-box" method="POST"
        action="<?php echo getUrl("Access", "Access", "login", false, 'ajax'); ?>">
        <h1 class="form-title text-center">Inicio Sesión</h1>
        <div class="x_panel contenedor">
            <div id="contenedor" class="text-center input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" class="login__input" name="usu_correo" id="usu_correo"
                    placeholder="Correo Electronico">
            </div>

            <div id="contenedorcontra" class="x_panel text-center  input-contenedor">
                <i class="fas fa-key icon"></i>
                <input class="login__input" type="password" id="usu_contraseña" name="usu_contraseña"
                    placeholder="Contraseña"><br> 

            <p>¿No tienes una cuenta? <a class="link"
                    href="<?php echo getUrl("Access", "Access", "getLogin", false, 'ajax'); ?>">Registrate </a></p>
                    <input style="margin:auto;"type="submit" value="Ingresar" class="button">
            </div>
            
        </div>
        
    </form>
</body>
</html>