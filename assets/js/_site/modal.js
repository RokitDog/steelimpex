const $ = jQuery.noConflict();

("use strict");
const modal = {
	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		const closeModal = document.querySelector(".closeModal");
		const modal = document.querySelector(".modal");
		const openModal = document.querySelector(".modalTrigger");
		const videoAutoplay = document.querySelector(".videoAutoplay");


		openModal.addEventListener("click", () => {
			modal.classList.remove("hidden");
			videoAutoplay.src += "&autoplay=1";
		});

		closeModal.addEventListener("click", () => {
			modal.classList.add("hidden");
			videoAutoplay.src =
				"https://player.vimeo.com/video/738879201?h=5c94ef2b8b&title=0&byline=0&portrait=0";
		});
	},
};

export default modal;
