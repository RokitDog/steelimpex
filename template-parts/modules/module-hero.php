<div class="hero-section">
	<div class="section-wrapper">
		<div class="hero-section-title">
			<h1>
				<?php echo get_field('title'); ?>
			</h1>
		</div>
		<a href="#" class="hero-section-video">
			<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/playvideo.svg"); ?>
			<p>
                <?php echo get_field('hero_video'); ?>
			</p>
		</a>
		<a href="<?php echo get_field('link_box_link'); ?>" class="hero-section-linkbox">
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

	<div class="socials">
		<ul>
			<a href="#" target="_blank">
				<li class="font-facebook"></li>
			</a>
			<a href="#" target="_blank">
				<li class="font-instagram"></li>
			</a>
			<a href="#" target="_blank">
				<li class="font-linkedin"></li>
			</a>
		</ul>
	</div>
</div>