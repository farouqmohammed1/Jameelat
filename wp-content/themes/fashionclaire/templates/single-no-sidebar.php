<?php
/**
* Template Name: Without Sidebar
* Template Post Type: post
*
* @package fashionclaire
* @since fashionclaire 1.2.0
*/
get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12">
				<?php get_template_part( 'template-parts/content' , 'single', get_post_format() ); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>