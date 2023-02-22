<?php   foreach ($capacitacion as $capa) {
 ?>
<div class="text-center  col-md-12 justitify-content-start">
<form id="modalVenta" action="<?php echo getUrl("Usuario","Usuario","CuposInsert");?>" method="post" enctype="multipart/form-data">   
    <div class="col-md-12">
        <label>ID </label>
        <label class="form form-control" for=""><?php echo $capa['capa_id']?></label>
    </div>
    <div class="col-md-12">     
        <label>Nombre</label>
        <label class="form form-control"for=""><?php echo $capa['capa_nombre']?></label>
    </div>
    <div class="col-md-12">     
        <label>Cupo</label>
        <label class="form form-control"for=""><?php echo $capa['capa_cupo']?></label>
    </div>
    <div class="col-md-12">
      

      
        <input type="hidden" id="inputVenta" value="1" name="cupo_cantidad" class="form form-control">
        <!-- aqui voy a validar cuantos tengo para generar una alerta -->
        <input type="hidden" id="prod_stock2" name="capa_cupo" value="<?php echo $capa['capa_cupo']?>">
        <input type="hidden" name="capa_id" value="<?php echo $capa['capa_id']?>">
        <input type="hidden" name="capa_nombre" value="<?php echo $capa['capa_nombre']?>">
    </div>

    <div  class="divboton col-md-12" >
        <button id="botonVenta" type="submit" class="boton btn btn-primary">Registrar cupo</button>
    </div>
</form>
</div>
<?php
}
?>
<footer>

</footer>