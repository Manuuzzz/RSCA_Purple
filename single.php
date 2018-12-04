<?php
/*
    Template Name: RSCA_Purple
*/
?>


<?php get_header(); ?>




<div class="grid-content">

<main>
<div class="flex-index"> <!-- dit veranderen zodat vertical alignment verandert -->

<?php
        // Start the loop.
        while ( have_posts() ) : the_post(); 

        echo '<div class="single_title">';
 the_title();
 echo '</div>';
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

