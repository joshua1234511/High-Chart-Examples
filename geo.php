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
  <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script type="text/javascript">
      $(function () {
        Highcharts.chart('container-right', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'SECTOR ALLOCATION'
            },
            subtitle: {
                text: 'As of 12/21/2016 (% of Total) (updated daily)'
            },
            exporting: {
                     enabled: false
            },
            xAxis: {
              title: {
                text: null
            },
            },
            yAxis: {
                min: 0,
                title: {
                    text: null
                },
                decmal: true,
            },
            legend: {
                enabled: false
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            series: [{
                name :'% of Total',
                data: [
                    {y: 19.05, color: 'red',name: 'SOUTH KOREA'}, 
                    {y: 14.19, name: 'TAIWAN'},
                    {y: 11.88, color: '#aaff99', name: 'RUSSIA'}, 
                    {y: 10.22, name: ''},
                    {y: 9.87, name: ''},
                    {y: 9.50, name: ''},
                    {y: 7.69, color: 'yellow', name: ''},
                    {y: 6.06, name: ''},
                    {y: 4.01, name: ''},
                    {y: 3.40, name: ''},
                    {y: 2.71, name: ''},
                    {y: 1.19, name: ''},
                    {y: 0.24, name: 'Others',drilldown: 'Others'}
                    ]
            }],
            drilldown: {
            series: [{
                name: 'Others',
                id: 'Others',
                data: [
                    [
                        'THAILAND',
                        24.13
                    ],
                    [
                        'UNITED ARAB EMIRATES',
                        17.2
                    ],
                    [
                        '',
                        8.11
                    ],
                    [
                        '',
                        5.33
                    ],
                    [
                        '',
                        1.06
                    ],
                    [
                        '',
                        0.5
                    ]
                ]
            }]},
        });
    });
  </script>
</head>
<body>
<div class="container">
  <div class="row">
    <div id="container-right" class="col-md-6" style="min-width: 310px; max-width: 50%; height: 400px; margin: 0 auto"></div>
    <div id="container-left" class="col-md-6" style="min-width: 310px; max-width: 50%; height: auto; margin: 0 auto">
      <table>
        <tr>
          <td colspan="4">SOUTH KOREA</td><td>17.24%</td>
        </tr>
        <tr>
          <td colspan="4">TAIWAN</td><td>13.98%</td>
        </tr>
        <tr>
          <td colspan="4">RUSSIA</td><td>11.55%</td>
        </tr>
        <tr>
          <td></td><td></td>
        </tr>
        <tr>
          <td></td><td></td>
        </tr>
        <tr>
          <td></td><td></td>
        </tr>
      </table>
    </div>
  </div>
</div>
</body>
</html>