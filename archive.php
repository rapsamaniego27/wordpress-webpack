<?php get_header(); ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="blog-post">
          <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('post_image') ?>" alt="" class="img-fluid mb-5">
            <?php endif ?>
          
           <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            <?php the_excerpt(); ?>
        </div> 
         
      <?php endwhile; else: endif; ?>



      <div class="pagination">
      <?php
          global $wp_query;

          $big = 999999999; // need an unlikely integer

          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
          ) );
          ?>
      </div>

<?php get_footer(); ?>

