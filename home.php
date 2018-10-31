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
 if (have_posts() ) : while (  have_posts() ) :  the_post(); 
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

