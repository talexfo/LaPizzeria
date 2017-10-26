<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
      
 <?php wp_head() ?>
        
    </head>
    <body>


    <header class="encabezado-sitio">

        <div class="contenedor">
            <div class="logo">
                <a href="<?php echo esc_url( home_url('/')) ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
                </a>
            </div> <!--cierre logo-->

        </div>  <!--cierre contenedor-->

    </header>

    <nav class="menu-sitio">
        <div class="contenedor navegacion">

        <?php
        $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'menu-sitio'
        );
        

        wp_nav_menu( $args );
        ?>


        </div>


    </nav>