<?php get_header(); ?>



      <img src="<?php the_post_thumbnail_url('post_image') ?>">

      <h1><?php the_title(); ?></h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
      <?php endwhile; else: endif; ?>

      <?php the_tags(); ?>


<?php get_footer(); ?>

