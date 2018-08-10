<?php get_header(); ?>

<div class="container site-content">



  <main>

    <div class="row">
    <div class="col">

    <?php while( have_posts() ) : the_post(); ?>

      <article class="post">

        <?php the_content(); ?>


      </article>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    </div>
    </div>

  </main>

  <!-- Home Blog Posts -->
  <section class="row home-blog">

  </section>

  <!-- Optional Home Widget Area -->
  <section class="row home-widgets">

  </section>

</div>

<?php get_footer(); ?>
