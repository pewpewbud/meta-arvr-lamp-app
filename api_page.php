<?php
$api_url = "http://api_marketplace.php"; // Replace with your API endpoint
$response = file_get_contents($api_url);

if ($response === FALSE) {
    echo "Failed to retrieve data.";
} else {
    $data = json_decode($response, true);
    echo "<h1>API Data</h1>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
?>

