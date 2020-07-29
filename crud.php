<?php
session_start();

require_once('nav.php');

include 'functions.php';

$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 20;

// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM flights ORDER BY flightid LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$flights = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of flights, this is so we can determine whether there should be a next and previous button
$num_flights = $pdo->query('SELECT COUNT(*) FROM flights')->fetchColumn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="crud.css">

    <title>North Airlines</title>
</head>
<body class="w3-light-grey">


<div class="content read">
	<h2>Flights Overview</h2>
	
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Departure</td>
                <td>Arrival</td>
                <td>Price</td>
                <td>Duration</td>
                <td>Departure Time</td>
                <td>Arrival Time</td>
                <td>Departure Date</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flights as $flight): ?>
            <tr>
                <td><?=$flight['flightid']?></td>
                <td><?=$flight['departure']?></td>
                <td><?=$flight['arrival']?></td>
                <td><?=$flight['price']?></td>
                <td><?=$flight['duration']?></td>
                <td><?=$flight['departuretime']?></td>
                <td><?=$flight['arrivaltime']?></td>
                <td><?=$flight['departuredate']?></td>
                <td class="actions">
                    <a href="update.php?flightid=<?=$flight['flightid']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?flightid=<?=$flight['flightid']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_flights): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

    
</body>
</html>