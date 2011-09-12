<div id="home-slide-wrap">
		<?php include (TEMPLATEPATH . '/logo-start.php'); ?>
	<div id="home-slider">
	
	<?php query_posts('post_type=slide&posts_per_page=10&orderby=menu_order&order=ASC');
	if ( have_posts() ) while ( have_posts() ) : the_post(); 
	?>
	        <div class="slide">
	            <div class="slideimg" style="width: 960px; height: 350px;"><?php the_post_thumbnail(array(960,350)); ?></div>
	             <div class="slide-text">
									<?php the_content(); ?>
	             </div>
	        </div><!--Ends Slide-->
	<?php endwhile; 
	wp_reset_query(); ?>
	</div>
	<div id="controls">
		<span id="pre">&lt;</span>
		<span id="nex">&gt;</span>
	</div>
	<div id="pager"></div>
</div>
