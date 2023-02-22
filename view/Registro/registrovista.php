<?php
include_once '../lib/helpers.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registro de cuenta</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
 

    <form id="registro" class="formulario form-box" method="POST"
        action="<?php echo getUrl("Access", "Access", "getInsert", false, "ajax"); ?>">

        <h1 class="form-title">Registro</h1>
        
        <div class="col-md-12">
            <div id="contenedorname" class="col-md-6">
                <label class="text-white"for="username">Nombre/s:</label>
                <input id="usu_nombre" type="text" class="form form-control" name="usu_nombre" placeholder="">
              
            </div>

            <div id="contenedorlastname" class="col-md-6">
                <label class="text-white" for="username">Apellido/s:</label>
                <input id="usu_apellido" type="text" class="form form-control" name="usu_apellido" placeholder="">
                
            </div>
        </div>
        <div class="col-md-12">
            <div id="contenedordireccion" class="col-md-6">
                <label class="text-white" for="username">Dirección:</label>
                <input id="usu_direccion" type="text" class="form form-control" name="usu_direccion" placeholder="">
               
            </div>

            <div id="contenedorphone" class="col-md-6">
                <label class="text-white" for="username">Teléfono:</label>
                <input id="usu_telefono" type="text" class="form form-control" name="usu_telefono" placeholder="">
                
            </div>
        </div>
        <div class="col-md-12">
            <div id="contenedorcountry" class="col-md-6">
                <label class="text-white" for="username">País:</label><br>
                <input id="usu_pais_residencia" type="text" class="form form-control" name="usu_pais_residencia"
                    placeholder="">
              
            </div>

            <div id="contenedorcity" class="col-md-6">
                <label class="text-white" for="username">Ciudad:</label>
                <input id="usu_residencia" type="text" class="form form-control" name="usu_residencia" placeholder="">
              
            </div>
        </div>
        <div class="col-md-12">
            <div id="contenedoremail" class="col-md-6">
                <label class="text-white" for="email">Correo:</label>
                <input id="usu_correo" type="email" class="form form-control" name="usu_correo" placeholder="">
                
            </div>

            <div id="contenedortipo" class="col-md-6">
                <label class="text-white" for="username">Tipo de documento:</label>
                <select id="usu_tipo_documento" type="text" class="form form-control" name="usu_tipo_documento"
                    placeholder="">
                    <option selected="true" disabled>Tipo de documento</option>
                    <option value="Cédula ciudadania">Cédula ciudadania</option>
                    <option value="trajeta identidad">Tarjeta identidad</option>
                    <option value="Cédula de extranjeria">Cédula de extranjeria</option>
                    <option value="pasaporte">Pasaporte</option>
                </select>
             
            </div>
        </div>

        <div class="col-md-12">
            <div id="contenedordocumento" class="col-md-6">
                <label class="text-white" for="username">Documento:</label>
                <input id="usu_documento" type="text" class="form form-control" name="usu_documento" placeholder="">
               
                </p>
            </div>

            <div id="contenedorpassword" class="col-md-6">
                <label class="text-white" for="pwd">Contraseña:</label>
                <input id="usu_contraseña" type="password" class="form form-control" name="usu_contraseña"
                    placeholder="">
              
            </div>
        </div>


      
        <div class="text-center">

            <input class="form-check-input" type="checkbox" value="1" name="usu_termino" required>
            <label class="text-white" class="form-check-label">Aceptar terminos y condiciones</label>
            <p class="text-white">¿Ya tienes una cuenta?<a class="link" href="Login.php">Iniciar Sesion</a></p>
            
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>

       
    </form>

</body>

</html>