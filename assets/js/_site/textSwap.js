const $ = jQuery.noConflict();
import gsap from "gsap";

'use strict';
const TextSwap = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        gsap.registerEffect({
            name: 'swapText',
            effect: (targets, config) => {
              let tl = gsap.timeline({ delay: config.delay });
              tl.to(targets, { opacity: 0, duration: config.duration / 2 });
              tl.add(() => (targets[0].innerText = config.text));
              tl.to(targets, { opacity: 1, duration: config.duration });
              return tl;
            },
            defaults: { duration: 1 },
            extendTimeline: true,
          });
      
          let tl = gsap.timeline({ repeat: -1 });
          tl.swapText('.fading-text', {
            text: 'da je reciklaža neophodan korak ka očuvanju planete',
            delay: 2,
          })
            .swapText('.fading-text', {
              text: 'da borba za bolje sutra nije nemoguća misija',
              delay: 2,
            })
            .swapText('.fading-text', {
              text: 'da je održivost na prvom mestu',
              delay: 2,
            })
            .swapText('.fading-text', {
              text: 'da su inovativna rešenja ključna',
              delay: 2,
            })
            .swapText('.fading-text', {
              text: 'da je svaki doprinos je značajan',
              delay: 2,
            })
            .swapText('.fading-text', {
              text: 'da je reciklaža neohodan korak ka očuvanju planete',
              delay: 2,
            })
            .swapText('.fading-text', {
              text: 'da svi možemo da doprinesemo',
              delay: 2,
            })
            .swapText('.fading-text', {
              text: 'da mali koraci neminovno vode do velike promene',
              delay: 2,
            });

	}
};

export default TextSwap;
