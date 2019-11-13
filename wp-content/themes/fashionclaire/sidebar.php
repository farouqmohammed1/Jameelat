<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;}
?>
<div class="col-md-4 col-sm-12">
    <aside id="secondary" class="sidebar">
        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <?php dynamic_sidebar('sidebar-1');?>
        <?php endif; ?>
    </aside>
</div>