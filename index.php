<!DOCTYPE html>
<html lang="en">
<head>
  <title>OWLshares</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script type="text/javascript">
    $(function () {
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Read important information about results and other investment disclosures'
            },
            subtitle: {
                text: 'Owl Chart'
            },
            xAxis: {
                categories: [
                    '1Yr',
                    '3Yr',
                    '5Yr',
                    '10Yr',
                    'Since Inception'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'NAV',
                data: [0, 0, 0, 0, 2.22]

            }, {
                name: 'Market Price',
                data: [0, 0, 0, 0, 2.88]

            }, {
                name: 'MSCI Emerging Markets Index',
                data: [0, 0, 0, 0, 0]

            }]
        });
    });
    $(function () {
        Highcharts.chart('container1', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'HISTORICAL PRICES'
            },
            subtitle: {
                text: 'Owl Shares'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Rate ($)'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Nav',
                data: [0, 0, 0, 0, 0, 21.5, 25.2, 26.5, 0, 18.3, 13.9, 9.6]
            }, {
                name: 'Market Place',
                data: [0, 0, 0, 0, 0, 15.2, 17.0, 16.6, 0, 10.3, 6.6, 4.8]
            }]
        });
    });

    $(function () {
        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'SECTOR ALLOCATION'
            },
            subtitle: {
                text: 'As of 12/21/2016 (% of Total) (updated daily)'
            },
            xAxis: {
        },
        yAxis: {
            min: 0,
            title: {
                text: 'SECTOR ALLOCATION'
            },
            decmal: true,
        },
        legend: {
            enabled: true
        },
        series: [{
            name: 'SECTOR ALLOCATION',
            data: [
                {y: 19.05, color: 'red'}, 
                14.19, 
                {y: 11.88, color: '#aaff99'}, 
                10.22, 
                9.87, 
                9.50, 
                {y: 7.69, color: 'yellow'},
                6.06,
                4.01,
                3.40,
                2.71,
                1.19,
                0.24]
        }]
        });
    });
  </script>
</head>
<body>

<div class="container">
  <h2>OWLshares</h2>
  <p>ESG-optimization for better investing</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
    <li><a data-toggle="tab" href="#menu1">Portfolio</a></li>
    <li><a data-toggle="tab" href="#menu2">Performance</a></li>
    <li><a data-toggle="tab" href="#menu3">Distributions</a></li>
    <li><a data-toggle="tab" href="#menu4">Pricing</a></li>
    <li><a data-toggle="tab" href="#menu5">Index</a></li>
    <li><a data-toggle="tab" href="#menu6">Documents</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Portfolio</h3>
      <div id="container2" style="min-width: 310px; max-width: 100%; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Performance</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home1">Average Annual Total Returns</a></li>
        <li><a data-toggle="tab" href="#menu11">Calendar Year Returns</a></li>
        <li><a data-toggle="tab" href="#menu21">Cumulative Total Returns</a></li>
      </ul>
      <div class="tab-content">
        <div id="home1" class="tab-pane fade in active">
          <h3>Average Annual Total Returns</h3>
          <div id="container" style="min-width: 310px; max-width: 100%; height: 400px; margin: 0 auto"></div>
        </div>
        <div id="menu11" class="tab-pane fade">
          <h3>Calendar Year Returns</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu21" class="tab-pane fade">
          <h3>Cumulative Total Returns</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Distributions</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Pricing</h3>
      <div id="container1" style="min-width: 310px; max-width: 100%; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h3>Index</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div id="menu6" class="tab-pane fade">
      <h3>Documents</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
</body>
</html>
