
import Sliders from './_site/sliders';
import TextSwap from './_site/textSwap';
import ImageSwap from './_site/imageSwap';

jQuery(function () {
	// Slick Slider
	Sliders.init();

	// Text Swap
	TextSwap.init();

	// Image Swap
	ImageSwap.init();

	console.log('hello');
});
