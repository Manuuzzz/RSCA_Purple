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
<div class="flex-logo">
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
<div class="flex-menu">
<div class="flex-menu-title"><span class="colorsalmon2">64</span> Les Géiants d'Ath</div>
<div class="flex-menu-nav">
<nav class="nav-bar">
<?php
$args = array(
    'theme_location' => 'primary'
);
?>

<?php wp_nav_menu($args); ?>

<!--
<ul>
<li><a class="nav-link" href="#news">News</a></li>
<li><a class="nav-link" href="#contactus">Contact us</a></li>
<li><a class="nav-link" href="#gallery">Gallery</a></li>
<li><a class="nav-link" href="#aboutus">About us</a></li>
</ul>-->
</nav>
</div><!-- end flex-menu-nav -->
</div><!-- end flex-menu -->
</header>
</div> <!-- end grid-menu -->

</head>

