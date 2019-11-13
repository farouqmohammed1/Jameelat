<?php
/**
* Template Name: Right Sidebar
* Template Post Type: post
*
* @package fashionclaire
* @since fashionclaire 1.2.5
*/
get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php get_template_part( 'template-parts/content' , 'single', get_post_format() ); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>