<?php get_header(); ?>

<div class="container site-content">

<div class="row">

  <main class="col-sm-8">

    <?php while( have_posts() ) : the_post(); ?>

      <article class="post">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <p>By <span class="text-muted"><?php the_author(); ?></span> on <span class="text-muted"><?php the_time( 'F jS, Y' ) ?></span></p>

        <?php the_content(); ?>

        <small><a href="<?php comments_link(); ?>">Comment on this post</a></small>

      </article>

    <?php endwhile; ?>

  </main>

  <aside class="col-sm-4 sidebar-right">

    <?php dynamic_sidebar( "sidebar-right" ); ?>

  </aside>

</div>

</div>

<?php get_footer(); ?>
