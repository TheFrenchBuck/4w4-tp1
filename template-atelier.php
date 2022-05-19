<?php
/**
* Template Name: Atelier
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>
<?php get_header(); ?>
<main class="site__main">
     <article class="atelier">
          <h1><?php the_title() ?></h1>
          <?php if (have_posts()): the_post();?>
          
             <!-- atelier__description -->
             
          <section class="atelier__desc">
          <h3>Description de l'atelier</h3>
          <div class="animateur">Animateur de L'atelier: <?php the_field('animateur'); ?> </div>
          <div class="local">Locale de l'atelier: <?php the_field('local'); ?> </div>
          
          <div class="description"> Description du cours: <?php the_field('description'); ?> </div>
          

          </section>
          <section class="atelier__horaire">
              <h3>Horaire et dates de l'atelier</h3>
              <div class="duree_atelier">Duré de chacunes des séances:  <span><?php the_field('duree_atelier'); ?></span>  Heures </div>
              <div class="date_de_debut">Date de début: <span><?php the_field('date_de_debut'); ?></span>  </div>
              <div class="date_de_fin">Date de fin: <span><?php the_field('date_de_fin'); ?></span> </div>
              <div class="jours_de_la_semaine"> La formation se donnera: <?php the_field('jours_de_la_semaine'); ?> </div>
              
              <div class="heurDebutFin">
                  L'horaire: De <span><?php the_field('heure_de_debut');?></span> à <span><?php the_field('heure_de_fin');?></span> 
                </div> 
                <image src="<?php the_field('iconimage');?>" alt="image non disponible">  
          </section>
         

     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>


