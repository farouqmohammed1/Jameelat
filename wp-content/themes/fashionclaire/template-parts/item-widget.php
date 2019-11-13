<article class="entry-widget">
    <div class="row">
        <div class="col-sm-5 col-xs-12">
            <?php if (has_post_thumbnail() ):?>
                <figure>
                    <a href="<?php the_permalink(); ?>"tabindex="-1" aria-hidden="true">
                        <?php the_post_thumbnail( 'fashionclaire-xsmall', [ 'alt' => esc_html ( get_the_title() ) ] ); ?>
                    </a>
                </figure>
            <?php endif;?>
        </div>
        <div class="col-sm-7 col-xs-12">
            <div class="entry-widget-content">
                <?php if((fashionclaire_get_option('show_entry_date_widget'))==1) :  ?>
                         <?php fashionclaire_posted_on();?>
                <?php endif; ?>
                <?php the_title( '<h1 class="entry-title-widget"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
            </div>
        </div>
    </div>
</article>