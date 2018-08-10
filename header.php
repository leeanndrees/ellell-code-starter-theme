<?php
/**
 * The Header for our theme.
 **/
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>

<header class="site-header container-fluid bg-color">

  <div class="container">

    <div class="row">

      <div class="col">

 <h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1> 

 <!-- 
 <h1><a href="<?php bloginfo( 'url' ); ?>"><img src="/student1/wp-content/uploads/2018/08/fisher-bldg-logo.png" alt="fisher building logo"/></a></h1>
 -->


        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu' ) ); ?>

      </div>

      </div>

  </div>

</header>
