<section class="home-blog">
    <?php
      // WP_Query arguments
      $args = array(
        'post_type'              => array( 'post' ),
        'posts_per_page'         => '2',
      );

      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post(); ?>

        <?php the_title('<h2>' , '</h2>');

          the_content(); ?>
      <?php	}
      } else {
        // no posts found
      }

      // Restore original Post Data
      wp_reset_postdata();

    ?>
</section>
