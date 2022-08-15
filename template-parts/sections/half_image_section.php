<div class="half-image-section 
<?php if( get_sub_field('reverse') ): ?> <?php echo 'row-reverse'; ?><?php endif; ?>
    ">
    <div class="half-image-section-image fadeIn-text">
        <img  src="<?php echo get_sub_field('image')['url']; ?>" alt="">
    </div>
    <div class="half-image-section-content">
        <div class="head-pretitle fadeIn-text">
            <span>
                <?php echo get_sub_field('pretitle'); ?>
            </span>
        </div>
        <div class="head-title fadeIn-text">
            <h2 class="text-clip-alt">
                <?php echo get_sub_field('title'); ?>
            </h2>
        </div>
        <div class="head-content fadeIn-text">
            <div class="entry-content">
                <p>
                    <?php echo get_sub_field('content'); ?>
                </p>
            </div>
        </div>
        <div class="head-link fadeIn-text">
            <a href="<?php echo get_sub_field('link'); ?>">
                 <?php echo get_sub_field('link_label'); ?>
                <li class="font-arrow-right"></li>
            </a>
        </div>
    </div>
</div>