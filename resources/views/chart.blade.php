<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello Highcharts</h1>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        This chart shows the use of a logarithmic y-axis. Logarithmic axes can be useful when dealing with data with spikes or large value gaps, as they allow variance in the smaller values to remain visible.
    </p>
</figure>

<script>
    Highcharts.chart('container', {
        title: {
            text: 'Growth of Internet Users Worldwide (logarithmic scale)'
        },
        accessibility: {
            point: {
                valueDescriptionFormat: '{index}. {point.name}, {point.y} million.'
            }
        },
        xAxis: {
            title: {
                text: 'Year'
            },
            categories: ['1995', '2000', '2005', '2010', '2015', '2020', '2023']
        },
        yAxis: {
            type: 'logarithmic',
            title: {
                text: 'Number of Internet Users (in millions)'
            }
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br />',
            pointFormat: '{point.y} million(s)'
        },
        series: [{
            name: 'Internet Users',
            keys: ['y', 'color'],
            data: [
                [16, '#0000ff'],
                [361, '#800073'],
                [1018, '#ba0046'],
                [2025, '#d06028'],
                [3192, '#eb0014'],
                [4673, '#eb0004'],
                [5200, '#ff0000']
            ],
            color: {
                linearGradient: {
                    x1: 0,
                    x2: 1,
                    y1: 0,
                    y2: 0
                },
                stops: [
                    [0, '#0000ff'],
                    [1, '#ff0000']
                ]
            }
        }]
    });
</script>
</body>
</html>
