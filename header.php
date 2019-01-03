<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130056157-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130056157-1');
</script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Supportersclub, RSCA, 64 Les Géiants d'ath, 64lesgeiantsdath, MissMauve, Miss Mauve, Fanclub, Anderlecht">
    <meta name="keywords" content="Supportersclub, RSCA, 64 Les Géiants d'ath, 64lesgeiantsdath, MissMauve, Miss Mauve, Fanclub, Anderlecht">
    <meta name="author" content="Emmanuel Lamon">
	<meta name="twitter:widgets:theme" content="light">
    <meta name="twitter:widgets:link-color" content="#39367d">
    <meta name="twitter:widgets:border-color" content="#fafafa">

    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php bloginfo('template_directory'); ?>/scripts/front.js"></script>

    <script type="application/ld+json">
	{
	"@context" : "http://schema.org",
	"@type" : "Supportersclub",
	"url" : "https://www.64lesgeiantsdath.be",
	"logo" : "https://www.64lesgeiantsdath.be/wp-content/uploads/2018/12/logo.png",
	"image" : "https://www.64lesgeiantsdath.be/wp-content/uploads/2018/12/logo.png",
	"name" : "64 Les Géiants d'Ath - Supportersclub RSCA",
	"description" : "We post news and photos from our supportersclub - 64 Les Géiants d'Ath",
	"telephone" : "",
	"email" : "emmanuel.lamon@gmail.com",
	"address" : [{
	"@type" : "PostalAddress",
	"streetAddress" : "",
	"postalCode" : "",
	"addressLocality" : "",
	"addressCountry" : "BE"
	}],
	"sameAs" : [
	"https://www.64lesgeiantsdath.be"
	]
	}
	</script>
    <?php wp_head(); ?>
</head>

<body onload="twitterStyling()" onresize="hideMenu()"><!-- onload="refreshSponsorImages()"  -->

    <div class="container">



<div class="grid-menu">
<header>

<div class="flex-logo-sm"><!-- this is visible in small screens -->
<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="RSCA Logo"></div>
<div class="RSCA">
RSCA
</div></div>

<div class="flex-menu-sm-container">

<?php
$args = array(
    'theme_location' => 'secondary'
);
?>

<?php wp_nav_menu($args); ?>

<div class="flex-menu-sm"><!-- this is visible in small screens -->
<div class="flex-menu-title-sm"><span class="colorsalmon2">64</span> Les Géiants d'Ath</div>

<div class="flex-menu-sm-icons colorsalmon1" onclick="toggleMenu()"><a href="#"><i class="fas fa-bars"></i></a></div>
</div>

<div id="flex-menu-sm-listed">
<nav class="nav-bar-sm">
<?php
$args = array(
    'theme_location' => 'primary'
);
?>

<?php wp_nav_menu($args); ?>


</nav>

</div>
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

<div class="flex-menu-container">

<?php
$args = array(
    'theme_location' => 'secondary'
);
?>

<?php wp_nav_menu($args); ?>

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

</nav>

</div><!-- end flex-menu-nav -->

</div><!-- end flex-menu -->
</div>

</header>
</div> <!-- end grid-menu -->


