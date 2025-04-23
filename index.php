<?php
$api_url = "http://44.211.44.232/api_market_raw.php";
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
        p.description {
            text-align: center;
            font-size: 18px;
            margin: 10px auto 30px;
            width: 60%;
            color: #444;
        }
        #search-bar {
            display: block;
            margin: 20px auto;
            padding: 10px;
            width: 50%;
            font-size: 16px;
        }
    </style>
    <script>
        function filterTable() {
            const input = document.getElementById('search-bar').value.toLowerCase();
            const rows = document.querySelectorAll('table tr');

            rows.forEach((row, index) => {
                if (index === 0) return; // skip header row
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(input) ? '' : 'none';
            });
        }
    </script>
</head>
<body>";

echo "<h1>Meta Marketplace</h1>";
echo "<p class='description'>Explore the virtual marketplace for AR/VR experiences. Browse tools, environments, skins, and utilities that enhance your immersive world.</p>";
echo "<input type='text' id='search-bar' onkeyup='filterTable()' placeholder='Search for items...'>";

if ($response === FALSE) {
    echo "Failed to retrieve data.";
} else {
    echo $response;
}

echo "</body></html>";
?>

