<?php
header('Content-Type: application/json');

$servername = "172.31.84.141";
$username = "apiuser";
$password = "1234";
$database = "ar_vr_app_data";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

$sql = "SELECT * FROM marketplace_items";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $items = [];
    while($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    echo json_encode($items, JSON_PRETTY_PRINT);
} else {
    echo json_encode([]);
}

$conn->close();
?>

