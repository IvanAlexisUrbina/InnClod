<?php


  include_once '../model/Documents/DocumentsModel.php';


Class DocumentsController
{

    public function consultDocuments() {
      $obj = new DocumentsModel();      
      $sql = "SELECT doc_documento.DOC_ID,doc_documento.DOC_NOMBRE,
      doc_documento.DOC_CODIGO,doc_documento.DOC_CONTENIDO,
      pro_proceso.PRO_NOMBRE,tip_tipo_doc.TIP_NOMBRE
      FROM (doc_documento
      INNER JOIN pro_proceso
      ON pro_proceso.PRO_ID=doc_documento.DOC_ID_PROCESO)
      INNER JOIN tip_tipo_doc ON doc_documento.DOC_ID_TIPO=tip_tipo_doc.TIP_ID";
      $documents = $obj->consult($sql, array());     
      $sql = "SELECT * FROM tip_tipo_doc";
      $type = $obj->consult($sql, array());     
      $sql = "SELECT * FROM pro_proceso";
      $processes = $obj->consult($sql, array());
      $sql="SELECT MAX(DOC_ID) FROM doc_documento";
      $exe= $obj->consult($sql,array());
      $id=mysqli_fetch_assoc($exe);
      $last_id=$id['MAX(DOC_ID)']+1;
      include_once "../view/Documents/Consult.php";
    }

    public function modalUpdate(){
        $obj=new DocumentsModel();
        $doc_id=$_GET['DOC_ID'];
        $sql="SELECT doc_documento.DOC_ID,doc_documento.DOC_NOMBRE,
              doc_documento.DOC_CODIGO,doc_documento.DOC_CONTENIDO,
              pro_proceso.PRO_NOMBRE,tip_tipo_doc.TIP_NOMBRE
              FROM (doc_documento
              INNER JOIN pro_proceso
              ON pro_proceso.PRO_ID=doc_documento.DOC_ID_PROCESO)
              INNER JOIN tip_tipo_doc ON doc_documento.DOC_ID_TIPO=tip_tipo_doc.TIP_ID
              WHERE doc_documento.DOC_ID= ? ";
       $document=$obj->consult($sql,array($doc_id));   
       $sql = "SELECT * FROM tip_tipo_doc";
       $type = $obj->consult($sql, array());
       $sql = "SELECT * FROM pro_proceso";
       $processes = $obj->consult($sql, array());
        include_once '../view/Documents/modalUpdate.php';
    }

      public function modalDelete(){
        $obj=new DocumentsModel();
        $doc_id=$_GET['DOC_ID'];
        $sql="SELECT doc_documento.DOC_ID,doc_documento.DOC_NOMBRE,
              doc_documento.DOC_CODIGO,doc_documento.DOC_CONTENIDO,
              pro_proceso.PRO_NOMBRE,tip_tipo_doc.TIP_NOMBRE
              FROM (doc_documento
              INNER JOIN pro_proceso
              ON pro_proceso.PRO_ID=doc_documento.DOC_ID_PROCESO)
              INNER JOIN tip_tipo_doc ON doc_documento.DOC_ID_TIPO=tip_tipo_doc.TIP_ID
              WHERE doc_documento.DOC_ID= ? ";
        $document=$obj->consult($sql, array($doc_id));   
        include_once '../view/Documents/modalDelete.php';
    }

    public function DocumentInsert(){
              $obj= new DocumentsModel();
              $id=$obj->autoIncrement("doc_documento","DOC_ID");
              $doc_nombre=$_POST['DOC_NOMBRE'];
              $doc_id_proceso=$_POST['PRO_ID'];
              $doc_id_tipo=$_POST['TIP_ID'];
              $doc_codigo=$_POST['DOC_CODIGO'];
              $doc_contenido=$_POST['DOC_CONTENIDO'];
              $sql="INSERT INTO doc_documento
                    VALUES ($id,'".$doc_nombre."','". $doc_codigo."','". $doc_contenido."','".$doc_id_tipo."','".$doc_id_proceso."')";
              $update=$obj->insert($sql);
              redirect(getUrl("Documents","Documents","consultDocuments"));
    }

    public function DocUpdate(){
    $obj= new DocumentsModel();
    $doc_id=$_POST['DOC_ID'];
    $doc_nombre=$_POST['DOC_NOMBRE'];
    $doc_id_proceso=$_POST['PRO_ID'];
    $doc_id_tipo=$_POST['TIP_ID'];
    $doc_codigo=$_POST['DOC_CODIGO'];
    $doc_contenido=$_POST['DOC_CONTENIDO'];
    
    $sql="UPDATE doc_documento
          SET  DOC_NOMBRE='".$doc_nombre."',DOC_CODIGO='" . $doc_codigo. "',DOC_CONTENIDO='" . $doc_contenido. "',DOC_ID_TIPO='".$doc_id_tipo."',DOC_ID_PROCESO='".$doc_id_proceso."'
          WHERE DOC_ID = '".$doc_id."'";
    $update=$obj->update($sql);
    redirect(getUrl("Documents","Documents","consultDocuments"));
    }
    
    public function DocDelete(){
    $obj= new DocumentsModel();
    $doc_id=$_POST['DOC_ID'];
    $params = array($doc_id);
    $delete=$obj->delete("doc_documento","DOC_ID=?", $params);     
    redirect(getUrl("Documents","Documents","consultDocuments"));
    }



}

?>