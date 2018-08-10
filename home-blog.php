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
      if ( $query->have_posts() ) { ?>

        <div class="row">

          <?php  while ( $query->have_posts() ) {

            $query->the_post(); ?>

            <div class="col-sm">

              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              <?php endif; ?>

              <?php the_title( '<h2>' , '</h2>' ); ?>



            </div>

      <?php	} ?>

      </div>

      <?php } else { ?>

        <p>Sorry, no posts here!</p>

      <?php }

      // Restore original Post Data
      wp_reset_postdata();

    ?>
</section>
