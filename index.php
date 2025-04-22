<?php
$api_url = "http://54.165.162.68/api_market_raw.php";
$response = file_get_contents($api_url);

echo "<!DOCTYPE html>
<html>
<head>
    <title>Marketplace Data</title>
    <style>
        h1 {
            text-align: center;
            font-size: 48px;
            font-weight: bold;
            margin-top: 40px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>";

echo "<h1>Meta Marketplace</h1>";

if ($response === FALSE) {
    echo "Failed to retrieve data.";
} else {
    echo $response;
}

echo "</body></html>";
?>
