<?php
    include_once '../lib/helpers.php';
    include_once '../lib/helpersLogin.php';
    include_once '../view/partials/header.php';
    echo "<body class='nav-md'>";
        echo "<div class='container body'>";
            echo "<div class='main_container'>";
                include_once '../view/partials/sidebar.php';
                include_once '../view/partials/navbar.php';
                echo "<div class='right_col' role='main' >";
                    echo "<div class='clearfix'></div>";
                    
                    echo "<div class='row'>";
                        echo "<div class='col-md-12 col-sm-12'>";
                        
                        echo "<div class=''>";
                        
                            if (isset($_GET['modulo'])) {
                                resolve();
                            }else{
                                include_once '../view/partials/content.php';
                            }
                        
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";     
        include_once '../view/partials/footer.php';
        include_once '../view/partials/modal.php';
    echo "</body>";
    echo "</html>";
                    
?>