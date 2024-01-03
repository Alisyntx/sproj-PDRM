<!-- Your HTML and JavaScript code -->
<script>
  var myChart = echarts.init(document.getElementById('main'));

  // Fetch data from PHP file using fetch API
  fetch('graphdata.php')
    .then(response => response.json())
    .then(reports => {
      // Process the data and render the chart
      processDataAndRenderChart(reports);
    })
    .catch(error => console.error('Error fetching data:', error));

  function processDataAndRenderChart(reports) {
    // Process the data to group by year
var dataByYear = {};
reports.forEach(function(report) {
  var year = report.gen_date.substring(0, 4);
  if (!dataByYear[year]) {
    dataByYear[year] = { num_death: 0, num_injuries: 0, num_misper: 0, num_dmg: 0, num_dispop: 0 };
  }
  dataByYear[year].num_death += report.gen_numdet; 
  dataByYear[year].num_injuries += report.gen_numinj; 
  dataByYear[year].num_misper += report.gen_misper; 
  dataByYear[year].num_dmg += report.gen_damstr; 
  dataByYear[year].num_dispop += report.gen_dispop; 
});

// Extract years and data for the chart
var years = Object.keys(dataByYear);
var deathData = years.map(function(year) {
  return parseFloat(dataByYear[year].num_death);
});
var injuriesData = years.map(function(year) {
  return parseFloat(dataByYear[year].num_injuries);
});
var missingData = years.map(function(year) {
  return parseFloat(dataByYear[year].num_misper);
});
var damageData = years.map(function(year) {
  return parseFloat(dataByYear[year].num_dmg);
});
var displaceData = years.map(function(year) {
  return parseFloat(dataByYear[year].num_dispop);
});

    // Specify the configuration items and data for the chart
    var option = {
      tooltip: {},
      legend: {
        data: ['Number of Deaths', 'Number of Injuries','Missing Person','Damage Structure','Displace']
      },
      xAxis: {
        data: years
      },
      yAxis: {
        type: 'value',
        axisLabel: {
          formatter: '{value}'
        }
      },
      series: [
        {
          name: 'Number of Deaths',
          type: 'bar',
          data: deathData
        },
        {
          name: 'Number of Injuries',
          type: 'bar',
          data: injuriesData
        },
        {
          name: 'Missing Person',
          type: 'bar',
          data: missingData
        },
        {
          name: 'Damage Structure',
          type: 'bar',
          data: damageData
        },
        {
          name: 'Displace',
          type: 'bar',
          data: displaceData
        }
      ]
    };

    // Set the chart options
    myChart.setOption(option);
  }
</script>
