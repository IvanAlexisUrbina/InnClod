<?php foreach ($capacitacion as $capa) {
?>
<nav class="titles navbar navbar-dark navbar-expand-sm" >
            <a class="navbar-brand" href="#">
                ELIMINAR 
            </a>
        </nav>
        <form id="" action="<?php echo getUrl("Usuario","Usuario","CapaDelete");?>" method="post" enctype="multipart/form-data">
            <div class="card divmodal" >
                <div class="card-body p-4">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <label class="">Nombre *</label>
                            <label class="form-control"><?php echo $capa['capa_nombre']?></label>
                            <input type="hidden" name="capa_id" value="<?php echo $capa['capa_id']?>">
                        </div>

                        <div class="col-md-6">
                            <label class="">Descripcion*</label>
                            <label class="form-control"><?php echo $capa['capa_descripcion']?></label>
                        </div>
                        <div class="col-md-6">
                            <label class="">Stock/cantidad*</label>
                            <label class="form-control"><?php echo $capa['capa_cupo']?></label>
                        </div>
                        <div class="divboton col-md-12" style="padding:5px 5px 5px 5px;">
                        <label for="">¿Estás seguro que deseas eliminar la capacitacion?</label>
                        <label for="">recuerde que despúes que la elimine no podra recuperarla.</label><br>
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </div>
        </form>
    </div>
    <?php
}
    ?>