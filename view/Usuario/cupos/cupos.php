<div class=" x_content">
    <div class="x_panel">

        <nav class="titles navbar navbar-dark navbar-expand-sm">
            <a class="navbar-brand" href="#">
                OFERTA DE CAPACITACIONES
            </a>
        </nav>
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
                                echo "<td class='text-center'>";  
                                echo  "<button id='ventas' title='Vender' class='btn btn-warning btn-sm ' data-url=".getUrl("Usuario","Usuario","CupoModal",array("capa_id" => $capa['capa_id']),"ajax")."><i class='fa fa-eye'></i></button>";
                                echo  "</button>";
                                echo   "</td>";    
                               echo  "</tr>";
                            }
                            ?>                  
        </tbody>
    </table>
        </div>
    </div>


</div>
