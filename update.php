<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
  <?php 
    // To check if the database connection is successful
    if ($pdo) {
        $sql = "
        UPDATE customer 
        SET 
            Phone = '999-888-777', 
            Email = 'cute@email.com',
            Address = 'cute street'
        WHERE 
            CustomerID = 7
        ";

    if ($pdo->exec($sql)) {
            echo "Data has been updated successfully.";
        } else {
            echo "Failed to update the data.";
        }
    } else {
        echo "Database connection failed.";
    }
  ?>
</body>
</html>