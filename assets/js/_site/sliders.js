const $ = jQuery.noConflict();

'use strict';
const Sliders = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		var slider = $('.js-slider');
		let carousel
		

			if(slider) {
				if(window.innerWidth < 767) {
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
				}  
			}

	}
};

export default Sliders;
