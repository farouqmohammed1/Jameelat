<?php
/**
* Template Name: Left Sidebar
*
* @package fashionclaire
* @since fashionclaire 1.2.5
*/
get_header(); ?>
	<div class="container">
		<div class="row">
			<?php get_sidebar(); ?>
				<div class="col-md-8">
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				</div>
		</div>
	</div>
<?php get_footer(); ?>