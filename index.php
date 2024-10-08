<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
    
    <?php
    $stmt = $pdo->prepare("SELECT * FROM eax_comsci_students");

    if ($stmt->execute()) {
        print_r($stmt->fetchAll());
    }

     
    $stmt = $pdo->prepare("SELECT * FROM eax_comsci_students");

    if ($stmt->execute()) {
        print_r($stmt->fetchAll());
    }

    ?>

<table>
		<tr>
			<th>Year Level</th>
			<th>Student Count</th>
		</tr>
		<?php foreach ($studentsByYearLevel as $row) { ?>
		<tr>
			<td><?php echo $row['year_level']; ?></td>
			<td><?php echo $row['studentCount']; ?></td>
		</tr>
		<?php } ?>
	</table> 

</body>
</html>