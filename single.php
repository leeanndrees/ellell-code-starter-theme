<?php get_header(); ?>

<div class="container site-content">

<div class="row">

  <main class="col-sm-8">

    <?php while( have_posts() ) : the_post(); ?>

      <article class="post-single">

        <?php the_title( '<h2>', '</h2>' ); ?>

        <p>By <span class="text-muted"><?php the_author(); ?></span> on <span class="text-muted"><?php the_time('F jS, Y') ?></span></p>

        <?php the_content(); ?>
      </article>

    <?php endwhile; ?>

    <?php comments_template(); ?>

  </main>

  <aside class="sidebar-right col-sm-4">

    <?php dynamic_sidebar('sidebar-right'); ?>

  </aside>

</div>

</div>

<?php get_footer(); ?>
