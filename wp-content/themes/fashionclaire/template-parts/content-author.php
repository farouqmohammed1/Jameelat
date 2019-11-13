<div class="clearfix author-info">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <div class="author-photo">
                <?php echo get_avatar(get_the_author_meta('ID'), 125);?>
            </div>
        </div>
        <div class="col-md-10 col-sm-8">
            <div class="author-content">
                <h3><?php the_author(); ?> </h3>
                <p><?php the_author_meta('description'); ?></p>
            </div> 
        </div>
    </div>
</div>