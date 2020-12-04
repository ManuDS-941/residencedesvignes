<?php get_header(); ?>


<div class="row fond-blanc">
  <div class="col-md-9 white">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="entry">
        <?php the_content(); ?>
    </div>

    <?php endwhile; else: ?>
        <p>Contenue non trouvée</p>
    <?php endif; ?>    
  </div>

  <div class="col-md-3 white">
    <div class="page-droite">
      <?php dynamic_sidebar('page-droite'); ?>
    </div>
  </div>
</div>
  
</section>

<?php get_footer(); ?>