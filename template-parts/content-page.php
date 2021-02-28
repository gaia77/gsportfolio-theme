<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gsportfolio_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php gsportfolio_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gsportfolio-theme' ),
				'after'  => '</div>',
			)
		);
		?>
		<?php
		if(is_page(11)): ?>
			<nav class="social">
				<?php
					echo '<div class="linkedin">'; 	
						echo '<a href="https://www.linkedin.com/in/gaia-santoro/" target="_blank">';
						get_template_part( 'icons/linkedin');
						echo '</a>';
					echo '</div>';
					echo '<div class="github">'; 	
						echo '<a href="https://www.github.com/gaia77" target="_blank">';
						get_template_part( 'icons/github');
						echo '</a>';		
					echo '</div>';							
				?>
			</nav>
			<?php 
		endif ?>
		<?php
		if(is_page(7)): ?>
		<div class="btn-container">
			
				<a class="btn-link-contact" href="<?php echo the_permalink(11) ?>">Contact</a>
			
				
				<a class="btn-link-work" href="<?php echo the_permalink(13) ?>">See my Work</a>
			
		</div>	
		<?php endif ?>	
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'gsportfolio-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
