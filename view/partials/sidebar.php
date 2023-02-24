<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
    <img src="build/images/icono.jpg" style="margin-left:61px;" data-estado="1"  width="100px" alt="logazo" id="logo"></a>
    </div> 
        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="build/images/User.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span class="">BIENVENIDO/A</span><br>
                <span class=""> <?php  echo $_SESSION['nameUser']?></span>
            </div>
        </div>


        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>MODULOS</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo getUrl("Documents","Documents","consultDocuments");?>"><i class="fa fa-file"></i>Registro Documentos</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>