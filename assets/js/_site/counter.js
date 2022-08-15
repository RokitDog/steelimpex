const $ = jQuery.noConflict();
import { CountUp } from "countup.js";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

("use strict");
const Counter = {
	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/

	init: function (color) {
		gsap.registerPlugin(ScrollTrigger);

		// Create array with targetNum class gsap
		const targetNums = gsap.utils.toArray(".targetNum");
		// Create countup for each element when scrolled into view
		targetNums.forEach((targetNum, i) => {
			if(i < targetNums.length -1) {
				gsap.from(targetNum, {
					scrollTrigger: {
						trigger: targetNum,
						start: "top bottom",
						end: "bottom bottom",
						onEnter: () => {
							const target = targetNum.getAttribute("data-number");
							const countUp = new CountUp(targetNum, target)
							countUp.start();
						}
					},
				});
			} else {
				targetNum.innerHTML = '∞'
			}
		});
	},
};

export default Counter;
