<div class="eo #contenedor_arriba x_content">
    <div class="contenedor_de_datos x_panel">

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:black;">
            <a class="navbar-brand" href="#">
                DOCUMENTOS
            </a>
        </nav>
        <form id="registrar" action="<?php echo getUrl("Documents","Documents","DocumentInsert");?>" method="post"
            enctype="multipart/form-data">
            <div class="card" style="border:none;border-radius: 5px;">
                <div class="card-body p-2">
                    <div class="row justify-content-start">
                        <div class="col-md-4">
                            <label class="">NOMBRE DOCUMENTO*</label>
                            <input type="text" name="DOC_NOMBRE" class=" form-control ">
                        </div>
                        <div class="col-md-4">
                            <label class="">TIPO DE DOCUMENTO*</label>
                            <select class=" form-control" name="TIP_ID" id="TIP_ID">
                                <option disabled="disabled" selected="true">Selecciona una opcion</option>
                                <?php  foreach ($type as $tp) {
                                    echo "<option value='".$tp['TIP_ID']."' pre='".$tp['TIP_PREFIJO']."'>".$tp['TIP_NOMBRE']."</option>";
                                } ?>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="">PROCESO*</label>
                            <select class=" form-control" name="PRO_ID" id="PRO_ID">
                                <option disabled="disabled" selected="true">Selecciona una opcion</option>
                                <?php  foreach ($processes as $pro) {
                                    echo "<option value='".$pro['PRO_ID']."' pre='".$pro['PRO_PREFIJO']."'>".$pro['PRO_NOMBRE']."</option>";
                                } ?>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="">CODIGO DEL DOCUMENTO*</label>
                            <input type="hidden" name="last_id" id="last_id" value='<?=$last_id?>'>
                            <input type="text" readonly name="DOC_CODIGO" id="DOC_CODIGO" class=" form-control ">
                        </div>
                        <div class="col-md-8">
                            <label class="">CONTENIDO DEL DOCUMENTO*</label>
                            <textarea type="text" name="DOC_CONTENIDO" id="DOC_CONTENIDO"
                                class=" form-control "></textarea>
                            <span id="error"></span>
                        </div>
                        <div class="col-md-12" style="padding:5px 5px 5px 5px;">
                            <button class="btn btn-primary" type="submit">Registrar</button>
                        </div>
        </form>
    </div>
</div>
</div>
<div class="x_title">
    <table id="data" class="table table-striped table-hover">
        <thead>
            <tr>
                <th class='text-center'>ID</th>
                <th class='text-center'>NOMBRE</th>
                <th class='text-center'>PREFIJO</th>
                <th class='text-center'>TIPO DE DOCUMENTO</th>
                <th class='text-center'>PROCESO</th>
                <th class='text-center'>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                            foreach($documents as $doc){ 
                                echo"<tr>";
                                echo "<td class='text-center'>".$doc['DOC_ID']."</td>";
                                echo "<td class='text-center'>".$doc['DOC_NOMBRE']."</td>";
                                echo "<td class='text-center'>".$doc['DOC_CODIGO']."</td>";
                                echo "<td class='text-center'>".$doc['TIP_NOMBRE']."</td>";
                                echo "<td class='text-center'>".$doc['PRO_NOMBRE']."</td>";
                                echo "<td class='text-center'>  
                                      <button id='editar'data-toggle='tooltip'  title='Editar' class='btn btn-success btn-sm '  data-url='".getUrl("Documents","Documents","modalUpdate",array("DOC_ID" => $doc['DOC_ID']),"ajax") ."'><i class='fa fa-pencil'></i></button>
                                      <button id='eliminar' data-toggle='tooltip'  title='Eliminar' class='btn btn-danger btn-sm '  data-url='".getUrl("Documents","Documents","modalDelete",array("DOC_ID" => $doc['DOC_ID']),"ajax") ."'><i class='fa fa-trash'></i></button>
                                    </button>
                                     </td>";
                               echo  "</tr>";
                            }
                            ?>
        </tbody>
    </table>
</div>