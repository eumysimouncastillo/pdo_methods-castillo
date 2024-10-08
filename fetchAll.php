<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Records</title>
</head>
<body>
  <?php 
    // To check if the database connection is successful
    if ($pdo) {
        // Prepare and execute the SQL query 
        $sql = "
        SELECT 
            PaymentID, 
            Amount, 
            PaymentMethod 
        FROM Payment 
        WHERE Amount > 500
        ";
        $stmt = $pdo->query($sql);

        // Fetch the results 
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($rows);
        echo "</pre>";
    } else {
        echo "Database connection failed.";
    }
  ?>
</body>
</html>