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
        Highcharts.chart('container1', {
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
        Highcharts.chart('container2', {
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
                data: [0, 0, 0, 0, 9.08]

            }, {
                name: 'Market Price',
                data: [0, 0, 0, 0, 10.13]

            }, {
                name: 'MSCI Emerging Markets Index',
                data: [0, 0, 0, 0, 0]

            }]
        });
    });
    jQuery(document).on( 'shown.bs.tab', 'a[data-toggle="tab"]', function (e) { // on tab selection event
      jQuery( ".contains-chart" ).each(function() { // target each element with the .contains-chart class
          var chart = jQuery(this).highcharts(); // target the chart itself
          chart.reflow() // reflow that chart
      });
    })
  </script>
</head>
<body>

<div class="container">
<h2>AVERAGE ANNUAL TOTAL RETURNS</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Month End</a></li>
    <li><a data-toggle="tab" href="#menu1">Quarter End</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Month End</h3>
      <div id="container1" class="contains-chart" style="min-width: 310px; max-width: 100%; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Quarter End</h3>
      <div id="container2" class="contains-chart" style="min-width: 310px; max-width: 100%; height: 400px; margin: 0 auto"></div>
    </div>
  </div>
</div>
</body>
</html>
