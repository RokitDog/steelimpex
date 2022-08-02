<div class="half-image-section 
    <?php if( get_sub_field('reverse') ): ?> <?php echo 'row-reverse'; ?><?php endif; ?>
">
    <div class="half-image-section-image">
        <img  src="<?php echo get_sub_field('image'); ?>" alt="">
    </div>
    <div class="half-image-section-content">
        <div class="head-title">
            <h2 class="text-clip-alt">
                <?php echo get_sub_field('title'); ?>
            </h2>
        </div>  
        <div class="head-list">
            <div class="entry-content">
                <ul>
                    <?php if ( have_rows('item') ) : ?>
                        <?php while ( have_rows('item') ) : the_row(); ?>
                            <li class="font-check-mark">
                                <?php echo get_sub_field('list_item'); ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                </ul>
            </div>
        </div>
    </div>
</div>