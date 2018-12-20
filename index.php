<?php get_header(); ?>




<div class="grid-content">

<main>
<div class="flex-index">
<div class="indexTitle"> 

  <?php
 if (  have_posts() ) : while (  have_posts() ) : the_post(); 
 ?>

  <?php  the_content();   ?>

 <?php
endwhile; 
 endif; 
  ?>
</div><!-- end indexTitle -->
</div><!-- end flex-index -->
</main>

</div><!-- end grid-content -->



<div class="grid-footer">
<?php get_footer(); ?>

</div> <!-- end grid-footer -->