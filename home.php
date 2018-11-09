<?php get_header(); ?>




<div class="grid-content">

<main>


<?php

$current = pll_current_language(); 

if ( $current == 'nl'){
$args = array( 'category_name' => 'news','lang' => 'nl');}
if ( $current == 'fr'){
$args = array( 'category_name' => 'newsfr','lang' => 'fr');}
if ( $current == 'en'){
$args = array( 'category_name' => 'newsen','lang' => 'en');}
$query = new WP_Query( $args ); 



echo '<div class="flex-news-container">';
if ($query ->have_posts() ) : while ( $query ->have_posts() ) : $query ->the_post(); 
if(  has_post_thumbnail()) :
 echo '<div class="zoom-container">';

   echo '<div class="flex-thumbnail">';
    the_post_thumbnail();
 
    echo '<div class="textonimage-container">';
      echo '<div class="textonimage-title">';
    
    the_title(); 

    echo '</div></div>';
    
    echo '</div></div>';
  endif;
endwhile; 
endif; 
echo '</div>';

wp_reset_postdata();
?>


</main>
</div><!-- end grid-content -->



<div class="grid-footer">
<?php get_footer(); ?>

</div> <!-- end grid-footer -->

