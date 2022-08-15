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
        const nav = document.querySelector('.js-main-nav')


        // Append headerSocial to secondary Menu
        nav.appendChild(headerSocial)
        
        navMenuButton.addEventListener('click', () => {
            header.classList.toggle('open');
            if(header.classList.contains('open')){
                navMenuButtonText.innerHTML = 'Nazad';
                header.style.backdropFilter = 'blur(94px)';
                header.style['-webkit-backdrop-filter'] = 'blur(94px)';
                header.style.background = 'rgba(255, 255, 255, 0.1)';
                // gsap change header height
                gsap.to(header, {
                    duration: 1,
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

                gsap.to(header, {
                    duration: 1,
                    height: 'initial',
                    ease: 'power2.out'
                });

                header.style.background = 'transparent';
                header.style.backdropFilter = 'blur(0px)';
                header.style['-webkit-backdrop-filter'] = 'blur(0px)';

                navMenus.forEach(navMenu => {
                    navMenu.style.display = 'none';
                })

                document.body.style.overflow = 'auto';
            }
        })

        window.addEventListener('resize', () => {
            // We execute the same script as before
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
          });
	}
};

export default MobileNav;
