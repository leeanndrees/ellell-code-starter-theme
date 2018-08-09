<?php
/**
 * The template for displaying Comments
 */
?>

<section class="comments">

	<?php if ( have_comments() ) : ?>

		<h3>Comments</h3>

		<ul class="commentlist list-unstyled">

			<?php wp_list_comments(); ?>

		</ul>

	<?php endif;?>

	<?php comment_form(); ?>

</section>
