<?php get_header(); ?>

      
  <a href="<?php the_permalink(); ?>">
    <img src="<?php the_post_thumbnail_url('post_image') ?>" alt="" class="img-fluid mb-5"> 
  </a>

  <h1><?php the_title(); ?></h1>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile; else: endif; ?>


<?php get_footer(); ?>
