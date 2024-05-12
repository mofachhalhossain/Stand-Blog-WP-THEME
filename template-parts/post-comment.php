<?php
if( is_active_sidebar( 'post-comment' ) ): ?>
<div class="sidebar">
    <?php dynamic_sidebar( 'post-comment' ); ?>
</div>
<?php endif; ?>