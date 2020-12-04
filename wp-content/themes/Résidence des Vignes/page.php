<?php get_header(); ?>

<div class="row fond-blanc">
<div class="col-md-12 white">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <div class="entry">
      <?php the_content(); ?>
  </div>

<?php endwhile; else: ?>
    <p>Contenue non trouvée</p>
<?php endif; ?>    

</div>
</div>

<?php get_footer(); ?>

