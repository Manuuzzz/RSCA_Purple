<?php
/*
    Template Name: RSCA_Purple
*/
?>


<?php get_header(); ?>




<div class="grid-content">

<main>
<div class="flex-index">

<?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
          the_content();
          echo 'test';
        // End the loop.
        endwhile;
        ?>

</div><!-- end flex-index -->
</main>

</div><!-- end grid-content -->



<div class="grid-footer">
<?php get_footer(); ?>

</div> <!-- end grid-footer -->

