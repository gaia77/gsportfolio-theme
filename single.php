<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gsportfolio_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :			
			the_post();
			echo '<h1>';
				the_title();
			echo '</h1>';
			
			if( function_exists( 'get_field' ) ){

				if ( get_field( 'tools' ) ){ //Prevents empty HTML
					echo '<p class=>';
					the_field( 'tools' );
					echo '</p>';
					
				}
				
			}
			
			the_content();
			?>
			<a href='<?php the_permalink(13) ?>'>See all Projects</a>
		<?php	
		endwhile; // End of the loop.
		
		?>
		

		

	</main><!-- #main -->

<?php

get_footer();
