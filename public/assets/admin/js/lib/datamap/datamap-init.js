( function ( $ ) {
	"use strict";

	// Global function for conditional loading
	window.initDataMap = function() {
		// Check if required elements and libraries exist
		var mapElement = document.getElementById('world-datamap');
		if (!mapElement || typeof Datamap === 'undefined') {
			console.warn('Datamap element or library not found');
			return;
		}

		try {
			var map = new Datamap( {
				scope: 'world',
				element: mapElement,
				responsive: true,
				geographyConfig: {
					popupOnHover: false,
					highlightOnHover: false,
					borderColor: 'rgba(0,123,255,0.5)',
					borderWidth: 1,
					highlightBorderWidth: 3,
					highlightFillColor: 'rgba(0,123,255,0.5)',
					highlightBorderColor: 'rgba(255,255,255,0.1)',
				},
				bubblesConfig: {
					popupTemplate: function ( geography, data ) {
						return '<div class="datamap-sales-hover-tooltip">' + data.country + '<span class="m-l-5"></span>' + data.sold + '</div>'
					},
					borderWidth: 1,
					highlightBorderWidth: 3,
					highlightFillColor: 'rgba(0,123,255,0.5)',
					highlightBorderColor: 'rgba(255,255,255,0.1)',
					fillOpacity: 0.75
				},
				fills: {
					'Visited': '#f5f5f5',
					'neato': 'rgba(0,123,255,1)',
					'white': 'rgba(0,123,255,1)',
					defaultFill: 'transparent',
				}
			} );

			map.bubbles( [
				{
					centered: 'USA',
					fillKey: 'white',
					radius: 5,
					sold: '500',
					country: 'United States'
				},
				{
					centered: 'SAU',
					fillKey: 'white',
					radius: 5,
					sold: '900',
					country: 'Saudi Arabia'
				},
				{
					centered: 'RUS',
					fillKey: 'white',
					radius: 5,
					sold: '250',
					country: 'Russia'
				},
				{
					centered: 'CAN',
					fillKey: 'white',
					radius: 5,
					sold: '1000',
					country: 'Canada'
				},
				{
					centered: 'IDN',
					fillKey: 'white',
					radius: 5,
					sold: '50',
					country: 'Indonesia'
				},
				{
					centered: 'AUS',
					fillKey: 'white',
					radius: 5,
					sold: '700',
					country: 'Australia'
				},
				{
					centered: 'MYS',
					fillKey: 'white',
					radius: 5,
					sold: '1500',
					country: 'Malaysia'
				}
			] );

			window.addEventListener( 'resize', function ( event ) {
				if (map && typeof map.resize === 'function') {
					map.resize();
				}
			} );

		} catch (error) {
			console.warn('Error initializing datamap:', error);
			// Show fallback content
			mapElement.innerHTML = '<div class="text-center text-muted p-4"><i class="fas fa-globe fa-3x mb-3"></i><div>World map unavailable</div></div>';
		}
	};

	// Auto-init if map element exists
	$(document).ready(function() {
		if (document.getElementById('world-datamap')) {
			// Wait for Datamap to be available
			var checkDatamap = function() {
				if (typeof Datamap !== 'undefined') {
					initDataMap();
				} else {
					setTimeout(checkDatamap, 100);
				}
			};
			checkDatamap();
		}
	});

} )( jQuery );
