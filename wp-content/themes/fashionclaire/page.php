<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <?php if((fashionclaire_get_option('show_page_sidebar'))==1) :  ?>
                 <div class="col-md-8">
                        <?php get_template_part( 'template-parts/content', 'page' ); ?>
                </div>
                <?php get_sidebar(); ?>
                <?php endif; ?>
            <?php if((fashionclaire_get_option('show_page_sidebar'))==0) :  ?>
                <div class="col-md-12">
                    <?php get_template_part( 'template-parts/content', 'page' ); ?>
                </div>
            <?php endif; ?>
        </div>
     </div>
<?php get_footer(); ?>