<?php foreach ($document as $doc) {
?>
<nav class="titles navbar navbar-dark navbar-expand-sm" >
            <a class="navbar-brand" href="#">
                ACTUALIZAR
            </a>
        </nav>
        <form id="actualizarinventario" action="<?php echo getUrl("Documents","Documents","DocUpdate");?>" method="post" enctype="multipart/form-data">
            <div class="card divmodal" >
                <div class="card-body p-4">
                <div class="row justify-content-start">
                        <div class="col-md-4">
                            <label >NOMBRE DOCUMENTO*</label>
                            <input type="text" name="DOC_NOMBRE" value="<?= $doc['DOC_NOMBRE']?>" class="form-control">
                        </div>
                        <div class="col-md-4">
                        <label>TIPO DE DOCUMENTO*</label>
                        <select class="form-control" name="TIP_ID" id="TIP_ID_MODAL">
                            <?php
                                foreach ($type as $tp) {
                                    $selected = ($tp['TIP_NOMBRE'] == $doc['TIP_NOMBRE']) ? 'selected' : '';
                                    echo "<option value='".$tp['TIP_ID']."' pre='".$tp['TIP_PREFIJO']."' $selected>".$tp['TIP_NOMBRE']."</option>";
                                }
                            ?>
                        </select>
                         </div>
                    <div class="col-md-4">
                        <label>PROCESO*</label>
                        <select class="form-control" name="PRO_ID" id="PRO_ID_MODAL">
                            <?php
                                foreach ($processes as $pro) {
                                    $selected = ($pro['PRO_NOMBRE'] == $doc['PRO_NOMBRE']) ? 'selected' : '';
                                    echo "<option value='".$pro['PRO_ID']."' pre='".$pro['PRO_PREFIJO']."' $selected>".$pro['PRO_NOMBRE']."</option>";
                                }
                            ?>  
                        </select>
                    </div>

                       
                        <div class="col-md-4">
                            <label >CODIGO DEL DOCUMENTO*</label>
                            <input type="hidden" name="numCode" id="numCode" value="<?= explode("-",$doc['DOC_CODIGO'])[2]?>">
                            <input type="hidden" name="DOC_ID" id="DOC_ID" value="<?= $doc['DOC_ID']?>">
                            <input type="text" readonly name="DOC_CODIGO" id="DOC_CODIGO_MODAL" value="<?= $doc['DOC_CODIGO']?>"
                                class="estiloinput form-control ">
                        </div>
                        <div class="col-md-8">
                            <label >CONTENIDO DEL DOCUMENTO*</label>
                            <textarea type="text" name="DOC_CONTENIDO" id="DOC_CONTENIDO"
                                class="estiloinput form-control "><?= $doc['DOC_CONTENIDO']?></textarea>
                                <span id="error"></span>
                        </div>
                        <div class="divboton col-md-12" style="padding:5px 5px 5px 5px;">
                            <button class="boton btn btn-primary" type="submit">Actualizar</button>
                        </div>
        </form>
    </div>
    <?php
}
    ?>