<div class="eo #contenedor_arriba x_content">
    <div class="contenedor_de_datos x_panel">

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:black;">
            <a class="navbar-brand" href="#">
                DOCUMENTOS
            </a>
        </nav>
        <form id="registrarprod" action="<?php echo getUrl("Documents","Documents","DocumentInsert");?>" method="post" enctype="multipart/form-data">
            <div class="card" style="border:none;border-radius: 5px;">
                <div class="card-body p-2">
                    <div class="row justify-content-start">
                        <div class="col-md-4">
                            <label class="titulos_negrita">NOMBRE DOCUMENTO*</label>
                            <input type="text" name="DOC_NOMBRE" class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-4">
                            <label class="titulos_negrita">PROCESO*</label>
                            <input type="text" name="PRO_NOMBRE" class="estiloinput form-control oferta">
                        </div>
                        <div class="col-md-4">
                            <label class="titulos_negrita">TIPO DE DOCUMENTO*</label>
                            <input type="text" name="TIP_NOMBRE" id="prod_stock"
                                class="estiloinput form-control oferta">
                        </div>
                        <div class="col-md-4">
                            <label class="titulos_negrita">CODIGO DEL DOCUMENTO*</label>
                            <input type="text" readonly name="DOC_CODIGO" id="DOC_CODIGO"
                                class="estiloinput form-control oferta">
                        </div>
                        <div class="col-md-8">
                            <label class="titulos_negrita">CONTENIDO DEL DOCUMENTO*</label>
                            <textarea type="text" name="DOC_CONTENIDO" id="DOC_CONTENIDO"
                                class="estiloinput form-control oferta"></textarea>
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
            <th class='text-center'>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                            foreach($documents as $doc){ 
                                echo"<tr>";
                                echo "<td class='text-center'>".$doc['DOC_ID']."</td>";
                                echo "<td class='text-center'>".$doc['DOC_NOMBRE']."</td>";
                                echo "<td class='text-center'>".$doc['DOC_ID_TIPO']."</td>";
                                echo "<td class='text-center'>".$doc['DOC_ID_PROCESO']."</td>";
                                echo "<td class='text-center'>  
                                      <button id='editar'data-toggle='tooltip'  title='Editar' class='btn btn-success btn-sm '  data-url='".getUrl("Usuario","Usuario","modalUpdate",array("DOC_ID" => $doc['DOC_ID']),"ajax") ."'><i class='fa fa-pencil'></i></button>
                                      <button id='eliminar' data-toggle='tooltip'  title='Eliminar' class='btn btn-danger btn-sm '  data-url='".getUrl("Usuario","Usuario","modalDelete",array("DOC_ID" => $doc['DOC_ID']),"ajax") ."'><i class='fa fa-trash'></i></button>
                                    </button>
                                     </td>";
                               echo  "</tr>";
                            }
                            ?>                  
        </tbody>
    </table>
</div>
