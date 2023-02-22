<div class="eo #contenedor_arriba x_content">
    <div class="contenedor_de_datos x_panel">

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:black;">
            <a class="navbar-brand" href="#">
                DOCUMENTOS
            </a>
        </nav>
        <form id="registrarprod" action="<?php echo getUrl("Usuario","Usuario","CapaInsert");?>" method="post" enctype="multipart/form-data">
            <div class="card" style="border:none;border-radius: 5px;">
                <div class="card-body p-2">
                    <div class="row justify-content-start">
                        <div class="col-md-3">
                            <label class="titulos_negrita">Nombre de la capacitación*</label>
                            <input type="text" name="capa_nombre" class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-3">
                            <label class="titulos_negrita">Descripcion de la capacitación*</label>
                            <input type="text" name="capa_descripcion" class="estiloinput form-control oferta">
                        </div>
                        <div class="col-md-3">
                            <label class="titulos_negrita">cupos*</label>
                            <input type="text" name="capa_cupo" id="prod_stock"
                                class="estiloinput form-control oferta">
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
            <th class='text-center'>DESCRIPCION</th>
            <th class='text-center'>CUPOS</th>
            <th class='text-center'>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                            foreach($capacitaciones as $capa){ 
                                echo"<tr>";
                                echo "<td class='text-center'>".$capa['capa_id']."</td>";
                                echo "<td class='text-center'>".$capa['capa_nombre']."</td>";
                                echo "<td class='text-center'>".$capa['capa_descripcion']."</td>";
                                echo "<td class='text-center'>".$capa['capa_cupo']."</td>";
                                echo "<td class='text-center'>  
                                      <button id='editar'data-toggle='tooltip'  title='Editar' class='btn btn-success btn-sm '  data-url='".getUrl("Usuario","Usuario","modalUpdate",array("capa_id" => $capa['capa_id']),"ajax") ."'><i class='fa fa-pencil'></i></button>
                                      <button id='eliminar' data-toggle='tooltip'  title='Eliminar' class='btn btn-danger btn-sm '  data-url='".getUrl("Usuario","Usuario","modalDelete",array("capa_id" => $capa['capa_id']),"ajax") ."'><i class='fa fa-trash'></i></button>
                                    </button>
                                     </td>";
                               echo  "</tr>";
                            }
                            ?>                  
        </tbody>
    </table>
</div>
