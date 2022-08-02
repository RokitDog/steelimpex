<div class="cards-section">
				<div class="section-wrapper">
					<div class="head-pretitle">
						<span>
                            <?php echo get_sub_field('pretitle'); ?>
						</span>
					</div>
					<div class="cards-section-content">
						<div class="cards-section-content-left">
							<div class="head-title">
								<h2 class="text-clip-alt">
                                    <?php echo get_sub_field('title'); ?>
								</h2>
							</div>
						</div>
						<div class="cards-section-content-right">
							<div class="entry-content">
								<p>
                                    <?php echo get_sub_field('content'); ?>
								</p>
							</div>
						</div>
					</div>
					<div class="cards-section-cards js-slider">

                        <?php if ( have_rows('item') ) : ?>
                            <?php while ( have_rows('item') ) : the_row(); ?>

                                <div class="cards-section-cards-item">
                                    <div class="cards-section-cards-item-title">
                                        <h3>
                                            <?php echo get_sub_field('item_title'); ?>
                                        </h3>
                                    </div>
                                    <div class="cards-section-cards-item-description">
                                        <p class="description">
                                            <?php echo get_sub_field('item_desc'); ?>
                                        </p>
                                    </div>
                                    <div class="cards-section-cards-item-link">
                                        <div class="head-link">
                                            <a href="<?php echo get_sub_field('item_link'); ?>">
                                                Saznaj Više
                                                <li class="font-arrow-right"></li>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

					</div>
				</div>
			</div>