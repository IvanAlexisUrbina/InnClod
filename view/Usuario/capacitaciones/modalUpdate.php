<?php foreach ($capacitacion as $capa) {
?>
<nav class="titles navbar navbar-dark navbar-expand-sm" >
            <a class="navbar-brand" href="#">
                ACTUALIZAR
            </a>
        </nav>
        <form id="actualizarinventario" action="<?php echo getUrl("Usuario","Usuario","CapaUpdate");?>" method="post" enctype="multipart/form-data">
            <div class="card divmodal" >
                <div class="card-body p-4">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <label class="">Nombre capacitacion*</label>
                            <input type="text" name="capa_nombre" value="<?php echo $capa['capa_nombre']?>" class="form-control ">
                            <input type="hidden" name="capa_id" value="<?php echo $capa['capa_id']?>">
                        </div>

                        <div class="col-md-6">
                            <label class="">Descripcion*</label>
                            <input type="text" name="capa_descripcion" value="<?php echo $capa['capa_descripcion']?>" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label class="">Cupos*</label>
                            <input type="text" name="capa_cupo" id="prod_stock"
                            value="<?php echo $capa['capa_cupo']?>" class="form-control ">
                        </div>
                        <div class="divboton col-md-12" style="padding:5px 5px 5px 5px;">
                            <button class="boton btn btn-primary" type="submit">Actualizar</button>
                        </div>
        </form>
    </div>
    <?php
}
    ?>