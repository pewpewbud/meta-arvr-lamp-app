<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = "172.31.84.141";
$user = "apiuser";
$pass = "1234";
$dbname = "ar_vr_app_data";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed");
}

$sql = "SELECT * FROM marketplace_items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marketplace Items</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Marketplace Items</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['item_id']) ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['description']) ?></td>
            <td><?= htmlspecialchars($row['category']) ?></td>
            <td>$<?= number_format($row['price'], 2) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

