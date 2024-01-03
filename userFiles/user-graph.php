<?php
// Assuming you have a database connection established

// Close the database connection
mysqli_close($conn);
?>

<!-- Your HTML and JavaScript code -->
<script>
  var myChart = echarts.init(document.getElementById('main'));

  // Specify the configuration items and data for the chart
  option = {
  title: [
    {
      text: ''
    }
  ],
  polar: {
    radius: [30, '80%']
  },
  radiusAxis: {
    max: 4
  },
  angleAxis: {
    type: 'category',
    data: ['Users','Centers','Announcement'],
    startAngle: 75
  },
  tooltip: {},
  series: [{
    type: 'bar',
    data: [<?php echo $userCount; ?>,<?php echo $centerCount; ?>,<?php echo $annCount; ?>],
    coordinateSystem: 'polar',
    label: {
      show: true,
      position: 'middle',
      formatter: 'table ka gwapo'
    }
  }
  ],
  animation: true
};

  // Set the chart options
  myChart.setOption(option);
</script>
