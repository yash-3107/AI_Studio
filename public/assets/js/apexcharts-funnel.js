(function () {
    "use strict";

    /* funnel chart */
    var options = {
        series: [
            {
                name: "Funnel Series",
                data: [1380, 1100, 990, 880, 740, 548, 330, 200],
            },
        ],
        chart: {
            type: 'bar',
            height: 350,
        },
        plotOptions: {
            bar: {
                borderRadius: 0,
                horizontal: true,
                barHeight: '80%',
                isFunnel: true,
            },
        },
        colors: [
            '#589bff',
        ],
        dataLabels: {
            enabled: true,
            formatter: function (val, opt) {
                return opt.w.globals.labels[opt.dataPointIndex] + ':  ' + val
            },
            dropShadow: {
                enabled: true,
            },
        },
        title: {
            text: 'Recruitment Funnel',
            align: 'middle',
        },
        xaxis: {
            categories: [
                'Sourced',
                'Screened',
                'Assessed',
                'HR Interview',
                'Technical',
                'Verify',
                'Offered',
                'Hired',
            ],
        },
        legend: {
            show: false,
        },
    };
    var chart = new ApexCharts(document.querySelector("#funnel-chart"), options);
    chart.render();
    /* funnel chart */

    /* pyramid chart */
    var options = {
        series: [
            {
                name: "",
                data: [200, 330, 548, 740, 880, 990, 1100, 1380],
            },
        ],
        chart: {
            type: 'bar',
            height: 350,
        },
        plotOptions: {
            bar: {
                borderRadius: 0,
                horizontal: true,
                distributed: true,
                barHeight: '80%',
                isFunnel: true,
            },
        },
        colors: [
            '#589bff', '#af6ded', '#fea45a', '#28d785', '#dd3a52', '#3a7adb', '#007c7c',
        ],
        dataLabels: {
            enabled: true,
            formatter: function (val, opt) {
                return opt.w.globals.labels[opt.dataPointIndex]
            },
            dropShadow: {
                enabled: true,
            },
        },
        title: {
            text: 'Pyramid Chart',
            align: 'middle',
        },
        xaxis: {
            categories: ['Sweets', 'Processed Foods', 'Healthy Fats', 'Meat', 'Beans & Legumes', 'Dairy', 'Fruits & Vegetables', 'Grains'],
        },
        legend: {
            show: false,
        },
    };

    var chart = new ApexCharts(document.querySelector("#pyramid-chart"), options);
    chart.render();
    /* pyramid chart */

})();