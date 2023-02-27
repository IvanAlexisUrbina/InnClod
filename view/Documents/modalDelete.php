<?php foreach ($document as $doc) {
?>
<nav class="titles navbar navbar-dark navbar-expand-sm" >
            <a class="navbar-brand" href="#">
                ACTUALIZAR
            </a>
        </nav>
        <form id="DeleteDocument" action="<?php echo getUrl("Documents","Documents","DocDelete");?>" method="post" enctype="multipart/form-data">
            <div class="card divmodal" >
                <div class="card-body p-4">
                <div class="row justify-content-start">
                        <div class="col-md-4">
                            <label >NOMBRE DOCUMENTO*</label>
                            <label class="form-control"><?= $doc['DOC_NOMBRE']?></label>
                        </div>
                        <div class="col-md-4">
                        <label>TIPO DE DOCUMENTO*</label>
                        <label class="form-control"><?= $doc['TIP_NOMBRE']?></label>
                         </div>
                    <div class="col-md-4">
                        <label>PROCESO*</label>
                        <label class="form-control"><?= $doc['PRO_NOMBRE']?></label>
                        
                    </div>   
                        <div class="col-md-4">
                            <label >CODIGO DEL DOCUMENTO*</label>
                            <input type="hidden" name="DOC_ID" id="DOC_ID" value="<?= $doc['DOC_ID']?>">
                            <label class="form-control"><?= $doc['DOC_CODIGO']?></label>

                        </div>
                        <div class="col-md-8">
                            <label >CONTENIDO DEL DOCUMENTO*</label>
                            <textarea type="text" name="DOC_CONTENIDO" id="DOC_CONTENIDO" readonly
                                class="estiloinput form-control oferta"><?= $doc['DOC_CONTENIDO']?></textarea>
                                <span id="error"></span>
                        </div>
                        <div class=" col-md-12" style="padding:5px 5px 5px 5px;">
                            <button class="boton btn btn-danger" type="button">Eliminar</button>
                        </div>
        </form>
    </div>
    <?php
}
    ?>