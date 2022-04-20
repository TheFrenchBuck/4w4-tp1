<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">1</div>
    <div class="animation__bloc">2</div>
    <div class="animation__bloc">3</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">5</div>
</section>
    <h3>Le département TIM</h3>
<?php wp_nav_menu(array("menu"=>"menu_accueil",
      "container"=>"nav")); ?>
      <h3>Événements</h3>
      <?php wp_nav_menu(array("menu"=>"accueil_evenement",
      "container"=>"nav")); ?>
 

    <h1>Accueil</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>