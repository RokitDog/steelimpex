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
				<div class="about-section-numbers-item">
					<div class="about-section-numbers-item-number">
						<span>34x</span>
					</div>
					<div class="about-section-numbers-item-description">
						<p class="description">
							Enim pulvinar arcu gravida orci, sit tempus maecenas quis.
						</p>
					</div>
				</div>
				<div class="about-section-numbers-item">
					<div class="about-section-numbers-item-number">
						<span>87.4%</span>
					</div>
					<div class="about-section-numbers-item-description">
						<p class="description">
							Massa quam amet rhoncus, quam sit dui et porttitor ut.
						</p>
					</div>
				</div>
				<div class="about-section-numbers-item">
					<div class="about-section-numbers-item-number">
						<span>780+</span>
					</div>
					<div class="about-section-numbers-item-description">
						<p class="description">
							Libero aenean platea eu aliquam.
						</p>
					</div>
				</div>
				<div class="about-section-numbers-item">
					<div class="about-section-numbers-item-number">
						<span>0%</span>
					</div>
					<div class="about-section-numbers-item-description">
						<p class="description">
							Massa quam amet rhoncus, quam sit dui et porttitor ut.
						</p>
					</div>
				</div>
				<div class="about-section-numbers-item">
					<div class="about-section-numbers-item-number">
						<span>42</span>
					</div>
					<div class="about-section-numbers-item-description">
						<p class="description">
							Libero aenean platea eu aliquam.
						</p>
					</div>
				</div>
			</div>
			<div class="about-section-banner">
				<div class="head-pretitle">
					<span>
						O nama
					</span>
				</div>
				<div class="head-title">
					<h2>
						Svaki reciklirani komad otpada se računa.
					</h2>
				</div>
				<div class="head-content">
					<div class="entry-content">
						<p>
							Reciklaža nam omogućava da istovremeno sprečavamo zagađenje, čuvamo prirodne resurse i pospešujemo cirkularnu ekonomiju.
						</p>
					</div>
				</div>
				<div class="about-section-banner-button primary-button">
					<a href="#">
						Kontaktiraj nas
					</a>
			</div>
			</div>
		</div>
	</div>
	<div class="location-section-buttons">
		<div>
			<button autofocus>
					Sremska Kamenica
				</button>
				<button>
					Petrovaradin
				</button>
				<button>
					Kraljevo
				</button>
		</div>
	</div>
	<div class="location-section">
	</div>
	<footer class="footer">
		<div class="section-wrapper">
			<div class="footer-container">
				<div class="footer-col-1">
					<a href="/" class="footer-col-1-logo">
						<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/logo-footer.svg"); ?>
					</a>
					<h3>
						Sit in adipiscing dictumst nunc. Suspendisse porta quam molestie nunc ipsum.
					</h3>
					<div class="footer-col-1-socials">
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
				</div>
					<div class="footer-col-2">
						<div class="head-pretitle">
							<span>NAVIGACIJA</span>
						</div>
						<nav class="footer-col-2-nav">
							<li>
								<a href="#">Reciklaža</a>
							</li>
							<li>
								<a href="#">Obnovljivi izvori energije</a>
							</li>
							<li>
								<a href="#">Proizvodi </a>
							</li>
							<li>
								<a href="#">O nama</a>
							</li>
							<li>
								<a href="#">Lokacije</a>
							</li>
							<li>
								<a href="#">Edukacija</a>
							</li>
						</nav>
					</div>
					<div class="footer-col-3">
						<div class="head-pretitle">
							<span>kontaktirajte nas</span>
						</div>
						<div class="footer-col-3-phones">
							<a href="tel:+381646497721">+381 64 6497 721</a>
							|
							<a href="tel:+381606596300">+381 60 6596 300</a>
						</div>
						<div class="footer-col-3-address">
							<p>Vihorska 35, 21208 Sremska Kamenica, Srbija</p>
						</div>
						<div class="footer-col-3-workinghours">
							<p>
								Pon – Pet: 07:00 – 15:00
							</p>
						</div>
					</div>
					<div class="footer-col-4">
						<div class="head-pretitle">
							<span>sertifikati</span>
						</div>
						<img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logos.jpg" alt="">

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
