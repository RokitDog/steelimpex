const $ = jQuery.noConflict();
// Import the Leaflet library
import * as L from 'leaflet';

'use strict';
const Map = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

		const locations = {
			petrovaradin: {
				lat : 45.2535991,
				lng : 19.8810053,
				title : 'Rade Koncara 1, Petrovaradin',
			},
			beograd: {
				lat : 45.2091573,
				lng : 19.8420773,
				title : 'Vihorska 35, Sremska Kamenica',
			},
			kraljevo: {
				lat : 43.72857,
				lng : 20.71828,
				title : 'Aerodromska 3, Kraljevo',
			}
		}

		let map = L.map('map').setView([45.2091573, 19.8420773], 17);

		L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png', {
		maxZoom: 20,
		attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
		}).addTo(map);
		
		L.marker([45.2091573, 19.8420773]).addTo(map)
			.bindPopup('Vihorska 35, Sremska Kamenica')
			.openPopup();

		const mapButtonsContainer = document.querySelector('.location-section-buttons div');
		const allButtons = mapButtonsContainer.querySelectorAll('button');
		console.log(allButtons)

				mapButtonsContainer.addEventListener('click', (e) => {
					if(e.target.nodeName === "BUTTON") {
						// remove active class from all buttons and add it to the clicked button
						allButtons.forEach(button => {
							button.classList.remove('active');
						}
						)
						e.target.classList.add('active');

						const targetMap = e.target.getAttribute('data-src');
						map.setView([locations[targetMap].lat, locations[targetMap].lng], 17);
						L.marker([locations[targetMap].lat, locations[targetMap].lng]).addTo(map)
							.bindPopup(locations[targetMap].title)
							.openPopup();
					}
				})



	}
};

export default Map;
