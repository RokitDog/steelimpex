const $ = jQuery.noConflict();

'use strict';
const Sliders = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		let resizeTimeout;
		var slider = $('.js-slider');
		let carousel
		let slicked = false;
		
		const resizeComplete = () => {
			if(slider) {
				if(window.innerWidth < 767 && !slicked) {
					slicked = true;
					// slider
					 carousel = slider.slick({
						slidesToShow: 2.1,
						slidesToScroll: 1,
						arrows: false,
						infinite: false,
						centerPadding: '0px',
						responsive: [
							{
								breakpoint: 650,
								settings: {
									slidesToShow: 1.1,
									slidesToScroll: 1,
									centerPadding: '0px',
								}
							}
						]
						
					});

				}  else if(carousel) {
					slicked = false;
					slider.slick('unslick');
				}
			}
		};

		window.onload = resizeComplete;

		window.addEventListener('resize', () => {
		  clearTimeout(resizeTimeout);
		  resizeTimeout = setTimeout(resizeComplete, 200);
		});
	}
};

export default Sliders;
