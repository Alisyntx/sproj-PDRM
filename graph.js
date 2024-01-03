$(document).ready(function () {
  // Fetch data using AJAX
  $.ajax({
    type: 'GET',
    url: 'graph1.php',
    dataType: 'json',
    success: function (data) {
      // Render chart with the fetched data
      renderChart(data);
    },
    error: function (error) {
      console.log('Error fetching data:', error);
    }
  });
});

function renderChart(data) {
  var myChart = echarts.init(document.getElementById('main'));

  // Specify the configuration items and data for the chart
  var option = {
    title: {
      text: 'ECharts Getting Started Example'
    },
    tooltip: {},
    legend: {
      data: ['tables']
    },
    xAxis: {
      data: ['Tables']
    },
    yAxis: {
      type: 'value',
      axisLabel: {
        formatter: '{value}'
      }
    },
    series: [
      {
        name: 'tables',
        type: 'bar',
        data: [data.tableCount]
      }
    ]
  };

  // Set the chart options
  myChart.setOption(option);
}