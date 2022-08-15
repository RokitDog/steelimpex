<div class="hero-section">
	<div class="section-wrapper">
		<div class="hero-section-title fadeIn-text-hero">
			<h1>
				<?php echo get_field('title'); ?>
			</h1>
		</div>
		<div class="hero-section-video modalTrigger fadeIn-text-hero">
			<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/playvideo.svg"); ?>
			<p>
                <?php echo get_field('hero_video'); ?>
			</p>
		</div>
		<a href="<?php echo get_field('link_box_link'); ?>" class="hero-section-linkbox fadeIn-text-hero">
			<div class="hero-section-linkbox-content">
				<p class="hero-section-linkbox-title">
                    <?php echo get_field('link_box_title'); ?>
				</p>
				<p class="hero-section-linkbox-desc description">
                    <?php echo get_field('link_box_desc'); ?>
				</p>
			</div>
			<div>
			<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/linkicon.svg"); ?>

			</div>			
		</a>
	</div>

	<div class="socials fadeIn-text-hero">
		<ul>
			<a href="https://www.facebook.com/steelimpex.rs" target="_blank">
				<li class="font-facebook"></li>
			</a>
			<a href="https://www.instagram.com/steelimpexdoo/" target="_blank">
				<li class="font-instagram"></li>
			</a>
			<a href="https://www.linkedin.com/in/steel-impex-6a59a21aa/" target="_blank">
				<li class="font-linkedin"></li>
			</a>
		</ul>
	</div>
</div>