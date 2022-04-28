<?php
/**
* Template Name: Évenements
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>
<?php get_header(); ?>
<main class="site__main">
     <article class="evenement">
          <h1><?php the_title() ?></h1>
          <?php if (have_posts()): the_post(); ?>
       
          <!-- evenement__image -->
          <section class="evenement__image">
               <!-- mettre les URL des image évènement -->
              <image class="image" src="<?php the_field('image') ;?>" alt="image non disponible">  
          </section>

          <!-- evenement__resume -->
          <section class="evenement__resume">
          <h3>Résumé</h3>
          <div class="resume">  <?php the_field('resume'); ?> </div>
          </section>

          <!-- evenement__organisateur -->
          <section class="evenement__organisateur">
          <h3>Organisateur</h3>
          <p class="organisateur">  <?php the_field('organisateur'); ?></p>
          </section>
               <!-- Date -->
          <section class="evenement__date">
          <h3>Date</h3>
          <p class="date"> <?php the_field('date'); ?></p>
          </section>
          <!-- Heure -->
          <section class="evenement__heure">
          <h3>Heures</h3>
          <p class="heure"> <?php the_field('heure'); ?></p>
          </section>

          <!-- evenement__endroit -->
          <section class="evenement__endroit">
               <h3>Endroit</h3>
               <p class="endroit"><?php  the_field('endroit'); ?></p>
          </section>
     
         
          
     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>


