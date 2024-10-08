<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Table</title>
</head>
<body>
  <?php 
    // To check if the database connection is successful
    if ($pdo) {
        $sql = "SELECT CustomerID, Name, Email, Phone, Address FROM Customer";
        $stmt = $pdo->query($sql);

        // Check if there are any customers
        if ($stmt->rowCount() > 0) {
            echo "<table border='1' cellpadding='10' cellspacing='0'>";
            echo "
            <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            </tr>";

            // Display all customers in the table
            foreach ($stmt as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['CustomerID']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Phone']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Address']) . "</td>";
                echo "</tr>";
            }

            // Close the HTML table
            echo "</table>";
        } else {
            // Display a message if no customers are found
            echo "No customers found.";
        }
    } else {
        echo "Database connection failed.";
    }
  ?>
</body>
</html>
