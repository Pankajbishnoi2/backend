<?php include 'navbar.php'; ?>
<?php

$conn = new mysqli("localhost", "root", "", "multi_shop_stock");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$table = $_GET['table'] ?? '';





$sql = "SELECT * FROM `$table`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stock - <?= htmlspecialchars($table) ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f9fb;
            color: #333;
            margin: 0;
            padding:20px;
        }

        h2, h3 {
            text-align: center;
            color: #333;
        }

        

        

       

       

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 14px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6f0ff;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Stock Details: <?= htmlspecialchars($table) ?></h2>

<?php ?>
    <table>
    
    <tr>
        <th>Serial. No.</th>
        <th>Item Name</th>
        <th>Quantity</th>
        
    </tr>
      
        <?php
    $serial = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $serial++ . "</td>";
        echo "<td>" . htmlspecialchars($row['item_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['quantity']) . "</td>";
        echo "</tr>";
    }
    ?>
    </table>


<?php $conn->close(); ?>
</body>
</html>
