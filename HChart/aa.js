
// Create the chart
Highcharts.chart('container1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Account Growth, Oct 2017 to Sep, 2015'
    },
    subtitle: {
        text: 'Click the columns to view in details.'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: ''
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b> total<br/>'
    },

    series: [{
        name: 'Month',
        colorByPoint: true,
        data: [{
            name: 'October',
            y: 146,
            drilldown: 'Microsoft Internet Explorer'
        }, {
            name: 'November',
            y: 148,
            drilldown: 'Chrome'
        }, {
            name: 'December',
            y: 150,
            drilldown: 'Firefox'
        },  {
            name: 'January',
            y: 156,
            drilldown: 'Safari'
        }]
    }],
    drilldown: {
        series: [{
            name: 'Microsoft Internet Explorer',
            id: 'Microsoft Internet Explorer',
            data: [
                [
                    'Walmart',
                   49
                ],
                [
                    'BNSF',
                    61
                ],
                [
                    'NS',
                    22
                ],
                [
                    'CN',
                    5
                ],
               
                [
                    'SWS',
                    10
                ]
            ]
        }, {
            name: 'Chrome',
            id: 'Chrome',
            data: [
                [
                    'Walmart',
                   50
                ],
                [
                    'BNSF',
                    62
                ],
                [
                    'NS',
                    22
                ],
                [
                    'CN',
                    5
                ],
               
                [
                    'SWS',
                    10
                ]
            ]
        }, {
            name: 'Firefox',
            id: 'Firefox',
            data: [
                [
                    'Walmart',
                   54
                ],
                [
                    'BNSF',
                    63
                ],
                [
                    'NS',
                    23
                ],
                [
                    'CN',
                    7
                ],
               
                [
                    'SWS',
                    10
                ]
            ]
        }, {
            name: 'Safari',
            id: 'Safari',
           data: [
                [
                    'Walmart',
                   48
                ],
                [
                    'BNSF',
                    60
                ],
                [
                    'NS',
                    22
                ],
                [
                    'CN',
                    5
                ],
               
                [
                    'SWS',
                    10
                ]
            ]
        }, {
            name: 'Opera',
            id: 'Opera',
            data: [
                [
                    'v12.x',
                    0.34
                ],
                [
                    'v28',
                    0.24
                ],
                [
                    'v27',
                    0.17
                ],
                [
                    'v29',
                    0.16
                ]
            ]
        }]
    }
});