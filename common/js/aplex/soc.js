$(function(){  
    $("#pickdate").timeDropper();
    $("#picktime").dateDropper({
        animate: false,
        formate: 'Y-m-d',
        maxYear: '2020'
    });

    socModuleGauge('cpuUsed', 400, 0, 80);
    socModuleGauge('memeryUsed', 400, 0, 180);
    socModuleGauge('diskUsed', 400, 0, 280);
});

function socModuleGauge(id, maxValue, minValue, curValue)
{
    var opts = {
        angle: -0.2,                 // The span of the gauge arc
        lineWidth: 0.2,              // The line thickness
        radiusScale: 1,              // Relative radius
        pointer: {
            length: 0.6,             // // Relative to gauge radius
            strokeWidth: 0.035,      // The thickness
            color: '#000000'         // Fill color
        },
        limitMax: false,             // If false, the max value of the gauge will be updated if value surpass max
        limitMin: false,             // If true, the min value of the gauge will be fixed unless you set it manually
        colorStart: '#6FADCF',       // Colors
        colorStop: '#8FC0DA',        // just experiment with them
        strokeColor: '#E0E0E0',      // to see which ones work best for you
        generateGradient: true,
        highDpiSupport: true         // High resolution support
    };

    var target = document.getElementById(id);               // your canvas element
    var gauge = new Gauge(target).setOptions(opts);         // create sexy gauge!
    gauge.maxValue = maxValue;                              // set max gauge value
    gauge.setMinValue(minValue);                            // Prefer setter over gauge.minValue = 0
    gauge.animationSpeed = 32;                              // set animation speed (32 is default value)
    gauge.set(curValue);                                    // set actual value

    return gauge;
}
