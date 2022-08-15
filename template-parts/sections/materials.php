<div class="materials-section">
					<div class="tabs-container">
						<div class="tabs-container-left">
							<div class="head-pretitle fadeIn-text">
								<span>
                                    <?php echo get_sub_field('pretitle'); ?>
								</span>
							</div>

							<?php if ( have_rows('item') ) : ?>
                                <?php while ( have_rows('item') ) : the_row(); ?>

                                    <a href="<?php echo get_sub_field('item_link'); ?>" class="tabs-container-left-item fadeIn-material" data-image="<?php echo get_sub_field('item_target_image'); ?>">
                                        <div class="tabs-container-left-item-title">
                                            <h4>
                                            <?php echo get_sub_field('item_title'); ?>

                                            </h4>
                                        </div>
                                        <div class="tabs-container-left-item-paragraph">
                                            <p>
                                            <?php echo get_sub_field('item_paragraph'); ?>

                                            </p>
                                        </div>
                                        <?php echo file_get_contents("./wp-content/themes/steelimpex/assets/images/linkicon-alt.svg"); ?>

                                    </a>

                                <?php endwhile; ?>
                            <?php endif; ?>
						</div>
						<div class="tabs-container-right">
							<div class="tabs-container-right-image"></div>
						</div>
					</div>
			</div>