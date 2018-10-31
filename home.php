<?php get_header(); ?>




<div class="grid-content">

<main>
<div class="flex-index">
<div class="newsContainer">
<div class="newsSlide">
<div class="newsSlideBG"></div>
<div class="newsContent">
<article>

   <?php
$current = pll_current_language(); 
?>    
       <?php 


if ( $current == 'nl'){
$args = array( 'category_name' => 'news','lang' => 'nl');}
if ( $current == 'fr'){
      $args = array( 'category_name' => 'newsfr','lang' => 'fr');}
      if ( $current == 'en'){
            $args = array( 'category_name' => 'newsen','lang' => 'en');}

$query = new WP_Query( $args ); 
 if ($query ->have_posts() ) : while (  $query ->have_posts() ) :  $query ->the_post(); 
 ?>

           <div >
        
        <h2 class="newsTitle"><?php the_title(); echo $current ?> </h2>
           <?php  the_content(); ?>

           </div><!-- #content -->

<?php
endwhile; 
 endif; 
 wp_reset_postdata(); ?>
</article>
</div>
 </div>


</div> <!-- end newsContainer -->



</div><!-- end flex-index -->
</main>

</div><!-- end grid-content -->



<div class="grid-footer">
<?php get_footer(); ?>

</div> <!-- end grid-footer -->

