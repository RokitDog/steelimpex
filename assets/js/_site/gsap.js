const $ = jQuery.noConflict();
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

("use strict");
const Gsap = {
	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/

	init: function (color) {
		gsap.registerPlugin(ScrollTrigger);

		let load;

		const timeout = setTimeout(() => {
			load = ScrollTrigger.getAll();
			load.forEach((instance) => {
				instance.refresh();
			});
		}, 300);


		if($('.fadeIn-text-hero').length > 0) {
			gsap.to('.fadeIn-text-hero', {
				opacity: 1,
				translateY: 0,
				duration: 1.3,
				stagger: {
					amount: 1
				},
				scrollTrigger: {
					trigger: '.fadeIn-text-hero',
					start: "top bottom",
					end: "bottom bottom",
				},
			});
		}



		const fadeInTexts = gsap.utils.toArray(".fadeIn-text");
		fadeInTexts.forEach((text) => {
			gsap.from(text, {
				opacity: 0,
				translateY: 100,
				duration: 1.3,
				scrollTrigger: {
					trigger: text,
					start: "top bottom",
					end: "bottom bottom",
				},
			});
		});


		// Animate each element sliding from left to right with opacity 0 to 1 and stagger 0.3s
		if($('.fadeIn-material').length > 0) {
			gsap.from('.fadeIn-material', {
				opacity: 0,
				translateX: -500,
				duration: 1.3,
				stagger: {
					amount: 1,  
				},
				scrollTrigger: {
					trigger: '.fadeIn-material',
					start: "top bottom",
					end: "bottom bottom",
				},
			});
		}

		if($('.fadeIn-cards').length > 0) {
			gsap.from('.fadeIn-cards', {
				opacity: 0,
				translateY: 100,
				duration: 1.3,
				stagger: {
					amount: 1.5,
				},
				scrollTrigger: {
					trigger: '.fadeIn-cards',
					start: "top bottom",
					end: "bottom bottom",
				},
			});
		}
		

		if($('.fadeIn-numbers').length > 0) {
			gsap.from('.fadeIn-numbers', {
				opacity: 0,
				translateY: 100,
				duration: 1.3,
				stagger: {
					amount: 0.5,
				},
				scrollTrigger: {
					trigger: '.fadeIn-numbers',
					start: "top bottom",
					end: "bottom bottom",
				},
			})
		}

		if($('.fadeIn-banner').length > 0) {
			gsap.to('.fadeIn-banner', {
				opacity: 1,
				translateY: 0,
				duration: 1.3,
				stagger: {
					amount: 0.5,
				},
				scrollTrigger: {
					trigger: '.fadeIn-banner',
					start: "top bottom",
					end: "bottom bottom",
				},
			})
		}
	},
};

export default Gsap;
