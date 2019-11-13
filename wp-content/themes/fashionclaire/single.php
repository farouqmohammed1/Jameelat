<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <?php if((fashionclaire_get_option('show_single_sidebar'))==1) :  ?>
                <div class="col-md-8 col-sm-12">
                    <?php get_template_part( 'template-parts/content', 'single' );?>
                </div>
                <?php get_sidebar();?>
                <?php endif; ?>
                <?php if((fashionclaire_get_option('show_single_sidebar'))==0) :  ?> 
                    <div class="col-md-8 col-md-offset-2">
                        <?php get_template_part( 'template-parts/content', 'single' );?>
                    </div>
                <?php endif; ?>
        </div>
    </div>
<?php get_footer();?>