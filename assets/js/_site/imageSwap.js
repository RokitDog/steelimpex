const $ = jQuery.noConflict();

'use strict';
const ImageSwap = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        const tab = document.querySelector('.tabs-container-left');
        const tabImage = document.querySelector('.tabs-container-right div');

        if (tab) {
            tab.addEventListener('mouseover', (e) => {
                const target = e.target.classList.contains('tabs-container-left-item')
                if(target){
                    const currentImage = e.target.getAttribute('data-image');
                    tabImage.style.backgroundImage = `url('./wp-content/themes/steelimpex/assets/images/${currentImage}.jpg')`;
                    
                    
                }
            })
        }

	}
};

export default ImageSwap;
