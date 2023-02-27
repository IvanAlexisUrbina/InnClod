<?php

include_once '../model/Access/AccessModel.php';

class AccessController
{
    //acceso en el login
    public function login()
    {
        $obj = new AccessModel();

        $usu_correo = $_POST['usu_correo'];
        $usu_contraseña = $_POST['usu_contraseña'];

        $selectedPass = "SELECT usu_contraseña FROM tbl_usuario WHERE usu_correo= ? ";

        $passord_V = $obj->consult($selectedPass,array($usu_correo));  
//pregunta si me llega mas de una consulta
        if (mysqli_num_rows($passord_V) > 0) {

            foreach ($passord_V as $pass) {
                $hash_verify_db = $pass['usu_contraseña'];
            }
//si concuerda la contraseña seleccioneme ese usuario y redireccionalo
            if (password_verify($usu_contraseña, $hash_verify_db)) {
                
                $sqlUser = "SELECT usu_id, usu_nombre, usu_apellido, usu_correo, usu_contraseña FROM tbl_usuario WHERE usu_correo= ? AND usu_contraseña='" . $hash_verify_db . "'";
                $usuario = $obj->consult($sqlUser,array($usu_correo));
               
                if (mysqli_num_rows($usuario) > 0) {
                    foreach ($usuario as $user) {

                        $_SESSION['nameUser'] = $user['usu_nombre'];
                        $_SESSION['surnameUser'] = $user['usu_apellido'];
                        $_SESSION['idUser'] = $user['usu_id'];
                        $_SESSION['auth'] = "ok";
                    }
                  
                    redirect("index.php");
                }               
            }else {
                //alerta de que no coincide la contraseña
                echo "<script>alert('El correo o contraseña no coinciden Vuelva a intentarlo'); </script>";
                redirect('login.php');
            }
            

        } else {
            echo "<script>alert('El correo o contraseña no coinciden Vuelva a intentarlo'); </script>";
            redirect('login.php');
        }
    }
// CIERRE DE SESION
    public function logOut()
    {
        session_destroy();
        redirect('login.php');
    }
}