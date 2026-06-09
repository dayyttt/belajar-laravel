
(function ($) {
    "use strict";

    // Global function for conditional loading
    window.initChartist = function() {
        // Only initialize if Chartist is available and elements exist
        if (typeof Chartist === 'undefined') {
            console.warn('Chartist library not loaded');
            return;
        }

        // Line Chart
        if (document.querySelector('.ct-chart')) {
            try {
                new Chartist.Line('.ct-chart', {
                    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                    series: [
                        [16, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
                        [4, 5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
                        [5, 3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
                        [3, 4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
                    ]
                }, {
                    low: 0,
                });
            } catch (e) {
                console.warn('Error initializing line chart:', e);
            }
        }

        // Pie Chart
        if (document.querySelector('.ct-pie-chart')) {
            try {
                var data = {
                    labels: ['facebook', 'twitter', 'youtube', 'google plus'],
                    series: [{
                        value: 20,
                        className: "bg-facebook"
                    }, {
                        value: 10,
                        className: "bg-twitter"
                    }, {
                        value: 30,
                        className: "bg-youtube"
                    }, {
                        value: 40,
                        className: "bg-google-plus"
                    }]
                };

                var options = {
                    labelInterpolationFnc: function (value) {
                        return value[0]
                    }
                };

                new Chartist.Pie('.ct-pie-chart', data, options);
            } catch (e) {
                console.warn('Error initializing pie chart:', e);
            }
        }

        // SVG Chart
        if (document.querySelector('.ct-svg-chart')) {
            try {
                var chart = new Chartist.Line('.ct-svg-chart', {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                    series: [
                        [1, 5, 2, 5, 4, 3],
                        [2, 3, 4, 8, 1, 2],
                        [5, 4, 3, 2, 1, 0.5]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showPoint: false,
                    fullWidth: true
                });

                chart.on('draw', function (data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            } catch (e) {
                console.warn('Error initializing SVG chart:', e);
            }
        }

        // Bar Chart
        if (document.querySelector('.ct-bar-chart')) {
            try {
                var data = {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                        [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
                        [4, 6, 3, 9, 6, 5, 2, 8, 3, 5, 5, 4] // Fixed syntax error
                    ]
                };

                var options = {
                    seriesBarDistance: 10
                };

                new Chartist.Bar('.ct-bar-chart', data, options);
            } catch (e) {
                console.warn('Error initializing bar chart:', e);
            }
        }

        // Small Line Chart
        if (document.querySelector('.ct-sm-line-chart')) {
            try {
                new Chartist.Line('.ct-sm-line-chart', {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                    series: [
                        [12, 9, 7, 8, 5],
                        [2, 1, 3.5, 7, 3],
                        [1, 3, 4, 5, 6]
                    ]
                }, {
                    fullWidth: true,
                    plugins: typeof Chartist.plugins !== 'undefined' && Chartist.plugins.tooltip ? [
                        Chartist.plugins.tooltip()
                    ] : [],
                    chartPadding: {
                        right: 40
                    }
                });
            } catch (e) {
                console.warn('Error initializing small line chart:', e);
            }
        }

        // Area Line Chart
        if (document.querySelector('.ct-area-ln-chart')) {
            try {
                new Chartist.Line('.ct-area-ln-chart', {
                    labels: [1, 2, 3, 4, 5, 6, 7, 8],
                    series: [
                        [5, 9, 7, 8, 5, 3, 5, 4]
                    ]
                }, {
                    low: 0,
                    plugins: typeof Chartist.plugins !== 'undefined' && Chartist.plugins.tooltip ? [
                        Chartist.plugins.tooltip()
                    ] : [],
                    showArea: true
                });
            } catch (e) {
                console.warn('Error initializing area line chart:', e);
            }
        }

        // Gauge Chart
        if (document.querySelector('.ct-gauge-chart')) {
            try {
                new Chartist.Pie('.ct-gauge-chart', {
                    series: [20, 10, 30, 40]
                }, {
                    donut: true,
                    donutWidth: 60,
                    startAngle: 270,
                    total: 200,
                    low: 0,
                    showLabel: false
                });
            } catch (e) {
                console.warn('Error initializing gauge chart:', e);
            }
        }

        // Donut Chart
        if (document.querySelector('.ct-donute-chart')) {
            try {
                new Chartist.Pie('.ct-donute-chart', {
                    series: [10, 20, 50, 20, 5, 50, 15],
                    labels: [1, 2, 3, 4, 5, 6, 7]
                }, {
                    donut: true,
                    showLabel: false
                });
            } catch (e) {
                console.warn('Error initializing donut chart:', e);
            }
        }
    };

    // Auto-init if chart elements exist
    $(document).ready(function() {
        if (document.querySelector('.ct-chart, .ct-pie-chart, .ct-svg-chart, .ct-bar-chart, .ct-sm-line-chart, .ct-area-ln-chart, .ct-gauge-chart, .ct-donute-chart')) {
            // Wait for Chartist to be available
            var checkChartist = function() {
                if (typeof Chartist !== 'undefined') {
                    initChartist();
                } else {
                    setTimeout(checkChartist, 100);
                }
            };
            checkChartist();
        }
    });

})(jQuery);