<?php 


  include_once '../model/Documents/DocumentsModel.php';

  
Class DocumentsController
{

    public function consultDocuments() {
      
      $obj = new DocumentsModel();

      // Consulta los documentos utilizando una sentencia preparada
      $sql = "SELECT * FROM doc_documento";
      $documents = $obj->consult($sql, array());

      // Consulta los tipos de documento utilizando una sentencia preparada
      $sql = "SELECT * FROM tip_tipo_doc";
      $type = $obj->consult($sql, array());

      // Consulta los procesos utilizando una sentencia preparada
      $sql = "SELECT * FROM pro_proceso";
      $processes = $obj->consult($sql, array());
      

      include_once "../view/Documents/Consult.php";


    }

    public function DocumentInsert(){
              $obj= new DocumentsModel();
              $id=$obj->autoIncrement("doc_documento","DOC_ID");
              $doc_nombre=$_POST['DOC_NOMBRE'];
              $doc_proceso=$_POST['DOC_PROCESO'];
              $capa_cupo=$_POST['capa_cupo'];
              $sql="INSERT INTO capacitacion(capa_id,capa_nombre,capa_descripcion,capa_cupo)
                    VALUES ($id,'".$capa_nombre."','".$capa_descripcion."','".$capa_cupo."')";
              $update=$obj->insert($sql);
              redirect(getUrl("Usuario","Usuario","consult"));
          }


}  

?>