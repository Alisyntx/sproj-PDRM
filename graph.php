<?php
// Assuming you have a database connection established

// Query to get the count of the user table
$userSql = "SELECT gen_numinj, COUNT(*) as injury_count FROM genreport GROUP BY gen_numinj";
$userResult = mysqli_query($conn, $userSql);

while ($userRow = mysqli_fetch_assoc($userResult)) {
    $genNumInj = $userRow['gen_numinj'];
    $injuryCount = $userRow['injury_count'];
}



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
    tooltip: {
      formatter: function(params) {
        var seriesIndex = params.seriesIndex;
        var dataIndex = params.dataIndex;
        var value = params.value;

        // Customize the tooltip content based on the series index
        if (dataIndex === 0) {
          return 'total injuries: ' + value;
        } else if (dataIndex === 1) {
          return 'Center Count: ' + value;
        } else if (dataIndex === 2) {
          return 'Announcement Count: ' + value;
        }

        // Default tooltip content
        return value;
      }
    },
    legend: {
      data: ['Users', 'Centers', 'Announcement']
    },
    xAxis: {
      type: 'category',
      data: ['2010', '2011', '2012'] // Assuming only one category for simplicity
    },
    yAxis: {
      type: 'value',
      axisLabel: {
        formatter: '{value}' // You can customize the label format as needed
      }
    },
    series: [
      {
        type: 'bar',
        data: [<?php echo $genNumInj; ?>, <?php echo $centerCount; ?>, <?php echo $annCount; ?>]
      },
      {
        type: 'bar',
        data: [<?php echo $genNumInj; ?>, <?php echo $centerCount; ?>, <?php echo $annCount; ?>]
      }
    ]
  };

  // Set the chart options
  myChart.setOption(option);
</script>


