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
						slidesToShow: 2.2,
						slidesToScroll: 1,
						arrows: false,
						infinite: false,
						responsive: [
							{
								breakpoint: 650,
								settings: {
									slidesToShow: 1.2,
									slidesToScroll: 1,
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

		window.onload = resizeComplete();

		window.addEventListener('resize', () => {
		  clearTimeout(resizeTimeout);
		  resizeTimeout = setTimeout(resizeComplete, 200);
		});
	}
};

export default Sliders;
