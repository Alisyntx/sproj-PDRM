<?php
$conn = mysqli_connect('localhost', 'root', '', 'disasterDB');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from genreport table
$sql = "SELECT gen_numinj, gen_numdet, gen_misper, gen_damstr, gen_dispop, gen_date FROM genreport";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
