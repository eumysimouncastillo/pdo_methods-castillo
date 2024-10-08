<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Customer</title>
</head>
<body>
  <?php 
    if ($pdo) { 
        $CustomerID = 11;

        $sql = "DELETE FROM customer WHERE CustomerID = $CustomerID";

        // Execute the SQL query
        if ($pdo->exec($sql)) {
            echo "Customer $CustomerID has been deleted successfully.";
        } else {
            echo "Failed to remove the customer.";
        }
    } else {
        echo "Database connection failed.";
    }
  ?>
</body>
</html>