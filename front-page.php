<?php get_header(); ?>

<div class="container site-content">



  <main>

    <div class="row">
    <div class="col">

    <?php while( have_posts() ) : the_post(); ?>

      <article class="post">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>


      </article>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    </div>
    </div>

  </main>




  <section class="row home-widgets">

  </section>

</div>

<?php get_footer(); ?>
