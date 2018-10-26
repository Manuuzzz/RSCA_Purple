<?php
/*
    Template Name: RSCA_Purple
*/
?>


<?php get_header(); ?>




<div class="grid-content">

<main>
<div class="flex-index">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <div >

           <?php  the_content(); ?>

           </div><!-- #content -->

<?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div><!-- end flex-index -->
</main>

</div><!-- end grid-content -->



<div class="grid-footer">
<?php get_footer(); ?>

</div> <!-- end grid-footer -->

