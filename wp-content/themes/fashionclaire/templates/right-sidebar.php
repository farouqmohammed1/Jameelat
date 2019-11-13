<?php
/**
* Template Name: Right Sidebar
*
* @package fashionclaire
* @since fashionclaire 1.2.5
*/
get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>