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

		<div class="main-container">
			<?php
			while ( have_posts() ) :			
				the_post();
				echo '<h1 class="project-title">';
					the_title();
				echo '</h1>';
				
				if( function_exists( 'get_field' ) ){

					if ( get_field( 'tools' ) ){ //Prevents empty HTML
						echo '<p class="tools">';
						the_field( 'tools' );
						echo '</p>';
						
					}
					
				}
				
				the_content();
			?>
		</div>
		<div class="btn-link">
			<a class="btn-link-single" href="<?php echo the_permalink(13) ?>">Back to all projects</a>	
		</div>
		<?php	
		endwhile; // End of the loop.
		
		?>
		

		

	</main><!-- #main -->

<?php

get_footer();
