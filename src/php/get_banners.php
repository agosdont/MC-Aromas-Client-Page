<?php
header('Content-Type: application/json');

$host = "localhost"; 
$user = "root";
$password = "mateo";
$dbname = "mc_aromas"; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Error de conexión']));
}

$sql = "SELECT url FROM banners";
$result = $conn->query($sql);

$banners = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $banners[] = $row['url'];
    }
}

$conn->close();

echo json_encode($banners);
?>
