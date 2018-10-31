<?php get_header(); ?>




<div class="grid-content">

<main>
<div class="flex-index">

  
 <div class="indexTitle"> 
 <?php  

$current = pll_current_language(); 


 if ( $current == 'fr'){
echo "Club de supporter Anderlecht";} 

if ( $current == 'nl'){
echo "Supportersclub Anderlecht"; }

if ( $current == 'en'){
echo "Fanclub Anderlecht"; }
?>
 </div><!-- end indexTitle -->
 

</div><!-- end flex-index -->
</main>

</div><!-- end grid-content -->



<div class="grid-footer">
<?php get_footer(); ?>

</div> <!-- end grid-footer -->

