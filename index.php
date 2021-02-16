<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gsportfolio_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header class="page-header">	
					<h1>Web Development</h1>
				</header>  <!-- page-heder -->
				<?php
			endif;
			
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				the_title();
				// write ACF code here
				//write html code here
				if( function_exists( 'get_field' ) ){

					if ( get_field( 'tools' ) ){ //Prevents empty HTML
						echo '<p>';
						the_field( 'tools' );
						echo '</p>';
						
					}
					
				}
				?>
				<div class="wp-block-buttons">
							<div class="wp-block-button is-style-outline dark">
								<a class="wp-block-button__link" href="<?php echo esc_url(get_permalink() ) ?>">See process</a>
							</div><!-- end outline -->
				</div><!-- end block-buttons -->
								

				<?php	endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
