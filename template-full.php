<?php get_header();
/* Template Name: Full-Width Page */
?>

<div class="container site-content">

<div class="row">

  <main class="col-sm-8">

    <?php echo "This is template-full.php"; ?>

    <?php while( have_posts() ) : the_post(); ?>

      <article class="page-content">

        <?php the_title( '<h2>', '</h2>' ); ?>

        <?php the_content(); ?>

      </article>

    <?php endwhile; ?>

  </main>

  <aside class="sidebar-right col-sm-4">

    <?php dynamic_sidebar( 'sidebar-right' ); ?>

  </aside>

</div>

</div>

<?php get_footer(); ?>
