<?php get_header(); ?>




<div class="grid-content">

<main>
<div class="flex-index">

    <?php
$current = pll_current_language(); 
?>
<?php 


if ( $current == 'fr'){
 $args = array( 'category_name' => 'premierepage','lang' => 'fr');
$query = new WP_Query( $args ); } 
if ( $current == 'nl'){
    $args = array( 'category_name' => 'hoofdpagina','lang' => 'nl'); 
    $query = new WP_Query( $args );}  
    if ( $current == 'en'){
    $args = array( 'category_name' => 'firstpage','lang' => 'en'); 
    $query = new WP_Query( $args );}
    ?>
 
 
 <!-- use slugname -->

  <?php
 if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); 
 ?>
 <div class="indexTitle">  
  <?php  //the_title();   ?>
 </div><!-- end indexTitle -->
 <?php
endwhile; 
 endif; 
 wp_reset_postdata(); ?>

</div><!-- end flex-index -->
</main>

</div><!-- end grid-content -->



<div class="grid-footer">
<?php get_footer(); ?>

</div> <!-- end grid-footer -->

