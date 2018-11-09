<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Emmanuel Lamon">

    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   
    <?php wp_head(); ?>


    <div class="container">



<div class="grid-menu">
<header>

<div class="flex-logo-sm"><!-- this is visible in small screens -->
<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="RSCA Logo"></div>
</div>

<div class="flex-menu-sm"><!-- this is visible in small screens -->
<div class="site-title-sm colorsalmon1"><?php bloginfo('name'); ?></div>
<div class="flex-menu-sm-icons colorsalmon1"><a href="#"><i class="fas fa-bars"></i></a></div>
<div class="flex-menu-sm-listed">test</div>
</div>






<div class="flex-logo"><!-- this is visible in normal screens -->
<div class="logo">
<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="RSCA Logo">
</div>
<div class="site-title">
<h1><?php bloginfo('name'); ?></h1>
<h3 class="colorsalmon1"><?php bloginfo('description'); ?></h3>
</div>
<div class="RSCA">
RSCA
</div>
</div>  <!-- end flex-logo -->






<div class="flex-menu"> <!-- this is visible in normal screens -->
<div class="flex-menu-title"><span class="colorsalmon2">64</span> Les Géiants d'Ath</div>
<div class="flex-menu-nav">
<nav class="nav-bar">
<?php
$args = array(
    'theme_location' => 'primary'
);
?>

<?php wp_nav_menu($args); ?>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'languagemenu' ) ); ?>
</nav>

</div><!-- end flex-menu-nav -->

</div><!-- end flex-menu -->
</header>
</div> <!-- end grid-menu -->

</head>
<body>

