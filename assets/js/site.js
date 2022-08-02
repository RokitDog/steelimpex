
import Sliders from './_site/sliders';
import TextSwap from './_site/textSwap';
import ImageSwap from './_site/imageSwap';
import MobileNav from './_site/mobileNav';
import Map from './_site/map';

jQuery(function () {
	// Slick Slider
	Sliders.init();

	// Text Swap
	const textToSwap = document.querySelector('.home')
	if(textToSwap){
		TextSwap.init();
	}

	// Image Swap
	ImageSwap.init();

	// Mobile Nav
	MobileNav.init();

	// Map
	Map.init();

	console.log('hello');
});
