<?php
/**
 * Template name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nmtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="hero-section">
				<div class="section-wrapper">
					<div class="hero-section-title">
						<h1>
							Steel Impex je lider<br /> reciklaže u Srbiji.
						</h1>
					</div>
					<a href="#" class="hero-section-video">
						<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/playvideo.svg"); ?>
						<p>
							Pregledaj video
						</p>
					</a>
					<a href="#" class="hero-section-linkbox">
						<div class="hero-section-linkbox-content">
							<p class="hero-section-linkbox-title">
								Budi i ti deo promene.
							</p>
							<p class="hero-section-linkbox-desc description">
								Saznaj koji otpad možeš da recikliraš.
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

			<div class="intro-section">
				<div class="section-wrapper">
					<h2 class="text-clip">
						Mi smatramo... <br />
						<span class="fading-text text-clip"></span>
					</h2>
				</div>
			</div>

			<div class="materials-section">
					<div class="tabs-container">
						<div class="tabs-container-left">
							<div class="head-pretitle">
								<span>
									Reciklaža
								</span>
							</div>
							<a href="#" class="tabs-container-left-item" data-image="metal">
								<div class="tabs-container-left-item-title">
									<h4>
										Metal
									</h4>
								</div>
								<div class="tabs-container-left-item-paragraph">
									<p>
										Od limenki do starih automobila, pretvaramo sav metalni otpad u sirovinu, smanjujući potrošnju energije i zagađenje životne sredine
									</p>
								</div>
								<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/linkicon-alt.svg"); ?>

							</a>
							<a href="#" class="tabs-container-left-item" data-image="plastika">
								<div class="tabs-container-left-item-title">
									<h4>
										Plastika
									</h4>
								</div>
								<div class="tabs-container-left-item-paragraph">
									<p>
										Umesto da se stotinama godina raspada, jednu PET bocu možemo bezbroj puta da recikliramo, dobijajući sirovinu za nove proizvode od plastike
									</p>
								</div>
								<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/linkicon-alt.svg"); ?>

							</a>
							<a href="#" class="tabs-container-left-item" data-image="guma">
								<div class="tabs-container-left-item-title">
									<h4>
										Guma
									</h4>
								</div>
								<div class="tabs-container-left-item-paragraph">
									<p>
										Starim gumama nije mesto na deponiji kad reciklažom mogu da postanu igralište za decu ili staza za trčanje
									</p>
								</div>
								<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/linkicon-alt.svg"); ?>

							</a>
							<a href="#" class="tabs-container-left-item" data-image="ostali-otpad">
								<div class="tabs-container-left-item-title">
									<h4>
										Ostali Otpad
									</h4>
								</div>
								<div class="tabs-container-left-item-paragraph">
									<p>
										Većina predmeta u svakodnevnoj upotrebi može da se reciklira: karton, papir, staklo, drvo itd.
									</p>
								</div>
								<?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/linkicon-alt.svg"); ?>

							</a>
						</div>
						<div class="tabs-container-right">
							<div class="tabs-container-right-image"></div>
						</div>
					</div>
			</div>

			<div class="half-image-section">
				<div class="half-image-section-image">
					<img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/solar-panels.png" alt="">
				</div>
				<div class="half-image-seciont-content">
					<div class="head-pretitle">
						<span>
							Obnovljivi izvori energije
						</span>
					</div>
					<div class="head-title">
						<h2 class="text-clip-alt">
							Steel Impex je prvi reciklažni centar u Srbiji, koji koristi isključivo obnovljive izvore energije.
						</h2>
					</div>
					<div class="head-content">
						<div class="entry-content">
							<p>
								Održivost, inovativnost i očuvanje životne sredine ubrajamo u osnovne vrednosti naše kompanije, zbog čega je odluka o prelasku na obnovljive izvore energije bila logičan izbor.
							</p>
						</div>
					</div>
					<div class="head-link">
						<a href="#">
							Saznaj Više
							<li class="font-arrow-right"></li>
						</a>
					</div>
				</div>
			</div>

			<div class="cards-section">
				<div class="section-wrapper">
					<div class="head-pretitle">
						<span>
							Proizvodi
						</span>
					</div>
					<div class="cards-section-content">
						<div class="cards-section-content-left">
							<div class="head-title">
								<h2 class="text-clip-alt">
									Nakon reciklaže nastaju novi proizvodi spremni za upotrebu.
								</h2>
							</div>
						</div>
						<div class="cards-section-content-right">
							<div class="entry-content">
								<p>
									Svaki komad otpada se u procesu reciklaže obrađuje do sastavnih delova, kako bi se od njega ponovo dobila sirovina za upotrebu ili gotov proizvod spreman za korišćenje.
								</p>
							</div>
						</div>
					</div>
					<div class="cards-section-cards js-slider">
						<div class="cards-section-cards-item">
							<div class="cards-section-cards-item-title">
								<h3>
									SBR ploče
								</h3>
							</div>
							<div class="cards-section-cards-item-description">
								<p class="description">
									Koriste se kao podloga za fitnes i dečija igrališta jer upijaju udarce i vibracije, čineći rekreaciju bezbednom.
								</p>
							</div>
							<div class="cards-section-cards-item-link">
								<div class="head-link">
									<a href="#">
										Saznaj Više
										<li class="font-arrow-right"></li>
									</a>
								</div>
							</div>
						</div>
						<div class="cards-section-cards-item">
							<div class="cards-section-cards-item-title">
								<h3>
									Gumeni granulat
								</h3>
							</div>
							<div class="cards-section-cards-item-description">
								<p class="description">
									Usitnjena reciklirana guma ima različite namene i koristi se u saobraćajnoj industriji, građevinarstvu, poljoprivredi itd.
								</p>
							</div>
							<div class="cards-section-cards-item-link">
								<div class="head-link">
									<a href="#">
										Saznaj Više
										<li class="font-arrow-right"></li>
									</a>
								</div>
							</div>
						</div>
						<div class="cards-section-cards-item">
							<div class="cards-section-cards-item-title">
								<h3>
									Gumeni čips
								</h3>
							</div>
							<div class="cards-section-cards-item-description">
								<p class="description">
									Kao najkrupniji proizvod reciklaže gume, suspaljuje se u cementarama za dobijanje energije, usitnjava se kako bi od njega nastale SBR ploče itd.
								</p>
							</div>
							<div class="cards-section-cards-item-link">
								<div class="head-link">
									<a href="#">
										Saznaj Više
										<li class="font-arrow-right"></li>
									</a>
								</div>
							</div>
						</div>
						<div class="cards-section-cards-item">
							<div class="cards-section-cards-item-title">
								<h3>
									PET flekice
								</h3>
							</div>
							<div class="cards-section-cards-item-description">
								<p class="description">
									Dobijaju se reciklažom plastike i služe kao sirovina u tekstilnoj 	industriji, proizvodnji crepa ili za ponovno pretvaranje u PET ambalažu
								</p>
							</div>
							<div class="cards-section-cards-item-link">
								<div class="head-link">
									<a href="#">
										Saznaj Više
										<li class="font-arrow-right"></li>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
