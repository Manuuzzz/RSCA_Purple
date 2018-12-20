<?php
/*
    Template Name: RSCA_Purple
*/


get_header(); ?><div class="grid-content">

<main>
<div class="flex-index">


<?php
 echo '<div class="indexContent">';
        // Start the loop.
        while ( have_posts() ) : the_post(); 
       
        echo '<div class="single_title">';
 the_title();
 echo '</div>';
 echo '<br />';
 echo '<div class="single_content">';
 echo '<br /><br />';

 echo '<div class="single_content_thumbnail">';
 the_post_thumbnail();
 echo '</div>';
          the_content();
          echo '</div>';
          
        // End the loop.
        endwhile;
        echo '</div>';
        ?>

</div><!-- end flex-index -->
</main>

</div><!-- end grid-content -->



<div class="grid-footer">
<?php get_footer(); ?>

</div> <!-- end grid-footer -->