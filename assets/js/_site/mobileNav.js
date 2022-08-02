const $ = jQuery.noConflict();
import gsap from "gsap";

'use strict';
const MobileNav = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

        const header = document.querySelector('.header');
        const navMenuButton = document.querySelector('.mobile-menu')
        const navMenuButtonText = document.querySelector('.mobile-menu span')
        const navMenus = document.querySelectorAll('.header__nav ul')
        const secondaryMenu = document.querySelector('.secondary-menu') 
        const headerSocial = document.querySelector('.header .socials')


        // Append headerSocial to secondary Menu
        secondaryMenu.appendChild(headerSocial)
        
        navMenuButton.addEventListener('click', () => {
            header.classList.toggle('open');
            if(header.classList.contains('open')){
                navMenuButtonText.innerHTML = 'Nazad';
                header.style.backdropFilter = 'blur(94px)';
                header.style.background = 'rgba(255, 255, 255, 0.1)';
                // gsap change header height
                gsap.to(header, {
                    duration: 0.5,
                    height: '100vh',
                    ease: 'power2.out'
                });

                // change visibility of nav menus
                navMenus.forEach(navMenu => {
                    navMenu.style.display = 'initial';
                })

                headerSocial.style.display = 'initial';
                headerSocial.style.bottom = '95px';

                // disable body scroll
                document.body.style.overflow = 'hidden';


            } else {
                navMenuButtonText.innerHTML = 'Meni';
                header.style.background = 'transparent';
                header.style.backdropFilter = 'blur(0px)';
                header.style.height = 'initial';

                navMenus.forEach(navMenu => {
                    navMenu.style.display = 'none';
                })

                document.body.style.overflow = 'auto';
            }
        })
	}
};

export default MobileNav;
