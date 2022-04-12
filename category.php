<?php get_header() ?>
<main class="principal">
    <h1>Programme TIM</h1>
    <section class="formation">
    <?php  wp_nav_menu(array(
            "menu"=>"categorie_cours",
            "container" => "nav"));  ?>
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <?php 
      
        // retourne un string qui représente le slug de la catégorie
        $url_categorie_slug = trouve_la_categorie(array('cours','web','jeux-video','creation-video','utilitaire'));?>
        
        
        <a href="<?= esc_url( home_url( '/' ));  ?>/category/<?= $url_categorie_slug ?>/?cletri=title&ordre=asc">Ascendant</a><br>
        <a href="<?= esc_url( home_url( '/' ));  ?>/category/<?= $url_categorie_slug ?>/?cletri=title&ordre=desc">Descendant</a><br>

        <a href="?cletri=title&ordre=asc">Ascendant</a><br>
        <a href="?cletri=title&ordre=desc">Descendant</a><br>

           <?php  wp_nav_menu(array(
                  "menu"=>"categorie_cours",
                  "container" => "nav"));  ?>

       <?php  
        $ma_categorie = get_category_by_slug($url_categorie_slug);
        echo "<h3>" . $ma_categorie->description . "</h3>  "; 
        ?>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <?php get_template_part( "gabarits/content", "cours"); ?>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>