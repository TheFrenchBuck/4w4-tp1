<?php
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<main class="site__main">
     <h1>---- page.php ------</h1>
     <?php if (have_posts()): while(have_posts()): the_post(); ?>
     <?php the_title() ?>
     <p class="evenement_resume"></p>
     <p class="evenement_resume"></p>
     <p class="evenement_resume"></p>
     <p class="evenement_resume"></p>
     <?php the_content() ?>
     <?php endwhile ?>
     <?php endif ?>
</main>
<?php get_footer() ?>


