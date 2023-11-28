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
  var option = {
    title: {
      text: ''
    },
    tooltip: {},
    legend: {
      data: ['Users', 'Centers','Announcement']
    },
    xAxis: {
      data: ['tables lng danay'] // Assuming only one category for simplicity
    },
    yAxis: {
      type: 'value',
      axisLabel: {
        formatter: '{value}' // You can customize the label format as needed
      }
    },
    series: [
      {
        name: 'Users',
        type: 'bar',
        data: [<?php echo $userCount; ?>]
      },
      {
        name: 'Centers',
        type: 'bar',
        data: [<?php echo $centerCount; ?>]
      },
      {
        name: 'Announcement',
        type: 'bar',
        data: [<?php echo $annCount; ?>]
      }
    ]
  };

  // Set the chart options
  myChart.setOption(option);
</script>
