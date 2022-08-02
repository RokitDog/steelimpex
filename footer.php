<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nmtheme
 */

?>

	</div><!-- #content -->
	<div class="about-section">
		<div class="section-wrapper">
			<div class="about-section-numbers">
				<?php if ( have_rows('about_numbers', 'option') ) : ?>
					<?php while ( have_rows('about_numbers', 'option') ) : the_row(); ?>
						<div class="about-section-numbers-item">
							<div class="about-section-numbers-item-number">
								<span><?php echo get_sub_field('number'); ?>
									<span class="unit"><?php echo get_sub_field('unit'); ?></span>
								</span>

							</div>
							<div class="about-section-numbers-item-description">
								<p class="description">
									<?php echo get_sub_field('description'); ?>
								</p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="about-section-banner" style="background-image: url('<?php echo get_field('about_bg_image', 'option'); ?>')">
				<div class="head-pretitle">
					<span>
						<?php echo get_field('about_pretitle', 'option'); ?>
					</span>
				</div>
				<div class="head-title">
					<h2>
						<?php echo get_field('about_title', 'option'); ?>
					</h2>
				</div>
				<div class="head-content">
					<div class="entry-content">
						<p>
							<?php echo get_field('about_paragraph', 'option'); ?>
						</p>
					</div>
				</div>
				<div class="about-section-banner-button primary-button">
					<a href="<?php echo get_field('about_link', 'option'); ?>">
						Kontaktiraj nas
					</a>
			</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/modules/module', 'map' ); ?>

	<footer class="footer">
		<div class="section-wrapper">
			<div class="footer-container">
				<div class="footer-col-1">
					<a href="/" class="footer-col-1-logo">
						<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/logo-footer.svg"); ?>
					</a>
					<h3>
						<?php echo get_field('footer_paragraph', 'option'); ?>
					</h3>
					<h3>
						<?php echo get_field('footer_paragraph_2', 'option'); ?>
					</h3>
				</div>
					<div class="footer-col-2">
						<div class="head-pretitle">
							<span>
								<?php echo get_field('footer_column_1_pretitle', 'option'); ?>
							</span>
						</div>
						<nav class="footer-col-2-nav">
							<?php if ( have_rows('footer_navigation', 'option') ) : ?>
								<?php while ( have_rows('footer_navigation', 'option') ) : the_row(); ?>
										<li>
											<a href="<?php echo get_sub_field('footer_nav_link'); ?>"><?php echo get_sub_field('footer_nav_label'); ?></a>
										</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</nav>
					</div>
					<div class="footer-col-3">
						<div class="head-pretitle">
							<span>	
								<?php echo get_field('footer_column_2_pretitle', 'option'); ?>
							</span>
						</div>
						<div class="footer-col-3-address">
							<p><?php echo get_field('address_1', 'option'); ?></p>
						</div>
						<div class="footer-col-3-address">
							<p><?php echo get_field('address_2', 'option'); ?></p>
						</div>
						<div class="footer-col-3-phones">
							<p>
								Telefon: 
								<a href="tel:<?php echo get_field('phone', 'option'); ?>"><?php echo get_field('phone', 'option'); ?></a>
							</p>
						</div>
						<div class="footer-col-3-workinghours">
							<p>
								Radno vreme:
							</p>
							<p>
								<?php echo get_field('working_hours', 'option'); ?>
							</p>
						</div>
					</div>
					<div class="footer-col-4">
						<div class="head-pretitle">
							<span><?php echo get_field('footer_column_3_pretitle', 'option'); ?></span>
						</div>
						<img  src="<?php echo get_field('certificate_image', 'option'); ?>" alt="">

					</div>
			</div>
			<div class="footer-socials">
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
			<div class="footer-bottom">
				<div class="footer-bottom-copyrights">
					<p>
						Steel Impex © 2022 All rights reserved
					</p>
				</div>
				<div class="footer-bottom-designedby">
					<p>
						Design & Development:
					</p>
					<a href="#">
						<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/baseline.svg"); ?>
					</a>
				</div>
			</div>
		</div>
	</footer>

	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
