/**
 * Error Handler untuk Laravel Admin Dashboard
 * Menangani error JavaScript yang tidak kritis
 */

(function() {
    'use strict';

    // Daftar error yang bisa diabaikan
    const SUPPRESSED_ERRORS = [
        'Cannot read properties of null (reading \'offsetWidth\')',
        'Cannot read properties of null (reading \'querySelectorAll\')',
        'Cannot read properties of null (reading \'querySelector\')',
        'Cannot read properties of null (reading \'getTotalLength\')',
        'yahooapis.com',
        'ERR_NAME_NOT_RESOLVED',
        'Script error',
        'datamaps.world.min.js',
        'chartist.min.js',
        'jquery.simpleWeather.min.js'
    ];

    // Override console.error untuk library errors
    const originalConsoleError = console.error;
    console.error = function(...args) {
        const message = args.join(' ');
        const shouldSuppress = SUPPRESSED_ERRORS.some(error => 
            message.includes(error)
        );
        
        if (!shouldSuppress) {
            originalConsoleError.apply(console, args);
        }
    };

    // Handle chart initialization errors
    window.handleChartError = function(chartType, element) {
        console.warn(`Chart ${chartType} failed to initialize`);
        if (element) {
            element.classList.add('chart-error');
            element.innerHTML = `<div class="text-center text-muted p-4">
                <i class="fas fa-chart-bar fa-2x mb-2"></i>
                <div>Chart tidak tersedia</div>
            </div>`;
        }
    };

    // Handle weather widget error
    window.handleWeatherError = function(element) {
        console.warn('Weather widget failed to load');
        if (element) {
            element.innerHTML = `<div class="text-center text-muted p-3">
                <i class="fas fa-cloud-sun fa-2x mb-2"></i>
                <div class="small">Cuaca tidak tersedia</div>
            </div>`;
        }
    };

    // Handle datamap error
    window.handleDatamapError = function(element) {
        console.warn('Datamap failed to load');
        if (element) {
            element.innerHTML = `<div class="text-center text-muted p-4">
                <i class="fas fa-globe fa-2x mb-2"></i>
                <div>Peta tidak tersedia</div>
            </div>`;
        }
    };

    // Check for missing elements and show appropriate messages
    document.addEventListener('DOMContentLoaded', function() {
        // Check for chart elements without data
        const chartSelectors = [
            '.ct-chart',
            '.ct-pie-chart', 
            '.ct-svg-chart',
            '.ct-bar-chart',
            '.ct-sm-line-chart',
            '.ct-area-ln-chart',
            '.ct-gauge-chart',
            '.ct-donute-chart'
        ];

        chartSelectors.forEach(selector => {
            const elements = document.querySelectorAll(selector);
            elements.forEach(element => {
                // Add loading state
                element.classList.add('chart-loading');
                
                // Check if chart loaded after 3 seconds
                setTimeout(() => {
                    if (element.children.length === 0) {
                        element.classList.remove('chart-loading');
                        window.handleChartError(selector, element);
                    }
                }, 3000);
            });
        });

        // Check weather widget
        const weatherElement = document.getElementById('weather-one');
        if (weatherElement) {
            setTimeout(() => {
                if (weatherElement.children.length === 0 || weatherElement.textContent.trim() === '') {
                    window.handleWeatherError(weatherElement);
                }
            }, 5000);
        }

        // Check datamap
        const datamapElement = document.getElementById('world-datamap');
        if (datamapElement) {
            setTimeout(() => {
                if (datamapElement.children.length === 0) {
                    window.handleDatamapError(datamapElement);
                }
            }, 5000);
        }
    });

})();