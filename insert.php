<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer</title>
</head>
<body>
  <?php 
    // To check if the database connection is successful
    if ($pdo) {
        $sql = "
        INSERT INTO Customer (
        CustomerID, 
        Name, 
        Email, 
        Phone, 
        Address) 
        VALUES (
        11, 
        'Chin Chin', 
        'chin@example.com', 
        '27-30-2024', 
        '123 Cutie Street')
        ";

    // Execute the query
    if ($pdo->exec($sql)) {
            echo "New customer has been added successfully.";
        } else {
            echo "Failed to insert the customer.";
        }
    } else {
        echo "Database connection failed.";
    }
  ?>
</body>
</html>