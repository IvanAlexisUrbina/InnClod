<?php

include_once '../model/Usuario/UsuarioModel.php';


Class UsuarioController

{ 
    // VISTA DE S
    //consulta capacitaciones que hay vigentes en la bd
    public function consult(){
        $obj= new UsuarioModel();
        $sql="SELECT * FROM capacitacion";
        $capacitaciones=$obj->consult($sql);      
        include_once '../view/Documents/Consult.php';
    }
    
//     // la vista de la modal para editar
//     public function modalUpdate(){
//         $obj=new UsuarioModel();
//         $capa_id=$_GET['capa_id'];
//         $sql="SELECT * FROM capacitacion
//               WHERE capa_id='".$capa_id."'";
             
//         $capacitacion=$obj->consult($sql);
//         include_once '../view/Usuario/capacitaciones/modalUpdate.php';
//     }
//     // la vista de la modal para editar
//     public function modalDelete(){
//         $obj=new UsuarioModel();
//         $capa_id=$_GET['capa_id'];
//         $sql="SELECT * FROM capacitacion
//               WHERE capa_id='".$capa_id."'";
//         $capacitacion=$obj->consult($sql);
//         include_once '../view/Usuario/capacitaciones/modalDelete.php';
//     }


// //acciones
//     //insertar el capacitacion
//      public function CapaInsert(){
//         $obj= new UsuarioModel();
//         $id=$obj->autoIncrement("capacitacion","capa_id");
//         $capa_nombre=$_POST['capa_nombre'];
//         $capa_descripcion=$_POST['capa_descripcion'];
//         $capa_cupo=$_POST['capa_cupo'];
//         $sql="INSERT INTO capacitacion(capa_id,capa_nombre,capa_descripcion,capa_cupo)
//               VALUES ($id,'".$capa_nombre."','".$capa_descripcion."','".$capa_cupo."')";
//         $update=$obj->insert($sql);
//         redirect(getUrl("Usuario","Usuario","consult"));
//     }


//     //editar el capacitacion
//     public function CapaUpdate(){
//         $obj= new UsuarioModel();
//         $capa_id=$_POST['capa_id'];
//         $capa_nombre=$_POST['capa_nombre'];
//         $capa_descripcion=$_POST['capa_descripcion'];
//         $capa_cupo=$_POST['capa_cupo'];
//         $sql="UPDATE capacitacion
//               SET  capa_nombre='".$capa_nombre."',capa_descripcion='" . $capa_descripcion . "',capa_cupo='" . $capa_cupo. "'
//              WHERE capa_id = '".$capa_id."'";
//         $update=$obj->update($sql);
//         redirect(getUrl("Usuario","Usuario","consult"));
//     }

//     //eliminar el Capacitacion
//     public function CapaDelete(){
//         $obj= new UsuarioModel(); 
//         $capa_id=$_POST['capa_id'];
//         $sql="DELETE FROM capacitacion
//               WHERE capa_id='".$capa_id."'";
//         $delete=$obj->delete($sql);
//         redirect(getUrl("Usuario","Usuario","consult"));
//     }




// //////PARA UN USARIO COMUN




//     //VISTA DE CUPOS
//     public function CuposConsult(){
//         $obj= new UsuarioModel();
//         $sql="SELECT * FROM capacitacion";
//         $capacitaciones=$obj->consult($sql);

//         include_once '../view/Usuario/cupos/cupos.php';
        
//     }




    
//     public function CuposInsert(){
//         $obj= new UsuarioModel();
//         $id=$obj->autoIncrement("cupo","id_cupo");
//         $capa_id=$_POST['capa_id'];
//         $capa_cantidad=$_POST['cupo_cantidad'];
//         //aqui voy a consultar cuantas capacitaciones hay para hacer la resta
//         $sql="SELECT * FROM capacitacion WHERE  capa_id='".$capa_id."'";
//         $capacitaciones=$obj->consult($sql);
//         foreach ( $capacitaciones as $capa) {
//             $cantidadOld=$capa['capa_cupo'];
//             if ($cantidadOld> $capa_cantidad) {
//                 $nuevacantidad=$cantidadOld - $capa_cantidad;
//             }else{
//                 $nuevacantidad=0; 
//             }
            
//         }
//         if ($cantidadOld<$capa_cantidad && $capa_cantidad<0) {
//             echo "<script>alert('No hay cupos');<script>";
//             redirect(getUrl("Usuario","Usuario","CuposConsult"));
//         }else {
       
        
//         $sql="UPDATE capacitacion
//               SET  capa_cupo='" . $nuevacantidad. "'
//              WHERE capa_id = '".$capa_id."'";
//         $update=$obj->update($sql);
        
       
//         $sql="INSERT INTO  cupo (id_cupo,capa_id,usu_id,capa_cantidad)
//               VALUES ('".$id."','".$capa_id."','".$_SESSION['idUser']."','".$capa_cantidad."')";
//         $execute=$obj->insert($sql);
//         redirect(getUrl("Usuario","Usuario","CuposConsult"));
//         }
//     }
    
    
//     // la vista de la modal para vender
//     public function CupoModal(){
//         $obj=new UsuarioModel();
//         $capa_id=$_GET['capa_id'];
//         $sql="SELECT * FROM capacitacion
//               WHERE capa_id='".$capa_id."'";
//         $capacitacion=$obj->consult($sql);
//         include_once '../view/Usuario/cupos/modalCupo.php';
        
//     }
}
?>