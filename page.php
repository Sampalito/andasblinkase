<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<?php include (TEMPLATEPATH . '/logo.php'); ?>
	<div id="main">
				<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) ) :
						echo get_the_post_thumbnail( $post->ID );
					 ?>
						
					<?php endif; ?>
					<div id="breadcrumb">
						<?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>
					</div>
				<div id="container">
					<div id="content" role="main">
							<?php
							/* Run the loop to output the page.
							 * If you want to overload this in a child theme then include a file
							 * called loop-page.php and that will be used instead.
							 */
							get_template_part( 'loop', 'page' );
							?>
					</div><!-- #content -->
				</div><!-- #container -->
				<?php get_sidebar(); ?>
		</div><!-- #Main -->
<?php get_footer(); ?>
