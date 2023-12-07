<?php
// Assuming you have a database connection established

// Query to get the count of the user table
$userSql = "SELECT COUNT(*) as user_count FROM user";
$userResult = mysqli_query($conn, $userSql);
$userRow = mysqli_fetch_assoc($userResult);
$userCount = $userRow['user_count'];

// Query to get the count of the center table
$centerSql = "SELECT COUNT(*) as center_count FROM status";
$centerResult = mysqli_query($conn, $centerSql);
$centerRow = mysqli_fetch_assoc($centerResult);
$centerCount = $centerRow['center_count'];

$annSql = "SELECT COUNT(*) as ann_count FROM ann";
$annResult = mysqli_query($conn, $annSql);
$annRow = mysqli_fetch_assoc($annResult);
$annCount = $annRow['ann_count'];

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
  animation: false
};

  // Set the chart options
  myChart.setOption(option);
</script>
