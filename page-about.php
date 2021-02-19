<?php
/**
 * The template for displaying About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gsportfolio_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
		<div class="btn-container">
			
				<a class="btn-link-contact" href="<?php echo the_permalink(11) ?>">Contact</a>
			
				
				<a class="btn-link-work" href="<?php echo the_permalink(13) ?>">See my Work</a>
			
		</div>	
		<?php	
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
