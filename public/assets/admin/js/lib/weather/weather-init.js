(function ($) {
    "use strict";

    function loadWeather(location, woeid) {
        // Check if weather widget element exists
        if (!$("#weather-one").length) {
            return;
        }

        // Show loading state
        $("#weather-one").html('<div class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading weather...</div>');

        $.simpleWeather({
            location: location,
            woeid: woeid,
            unit: 'f',
            timeout: 5000, // 5 second timeout
            success: function (weather) {
                var html = '<i class="wi wi-yahoo-' + weather.code + '"></i><h2> ' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
                html += '<div class="city">' + weather.city + ', ' + weather.region + '</div>';
                html += '<div class="currently">' + weather.currently + '</div>';
                html += '<div class="celcious">' + weather.alt.temp + '&deg;C</div>';

                $("#weather-one").html(html);
            },
            error: function (error) {
                console.warn('Weather API error:', error);
                // Show fallback content instead of error
                var fallbackHtml = '<div class="text-center text-muted">';
                fallbackHtml += '<i class="fas fa-cloud-sun fa-2x mb-2"></i>';
                fallbackHtml += '<div class="small">Weather service unavailable</div>';
                fallbackHtml += '</div>';
                $("#weather-one").html(fallbackHtml);
            }
        });
    }

    // Global function for conditional loading
    window.initWeather = function() {
        loadWeather('Jakarta', ''); // Changed to Jakarta for better availability
    };

    // Auto-init if weather element exists
    $(document).ready(function() {
        if ($("#weather-one").length) {
            initWeather();
        }
    });

})(jQuery);
