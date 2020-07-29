<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the contact ID exists
if (isset($_GET['flightid'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM flights WHERE flightid = ?');
    $stmt->execute([$_GET['flightid']]);
    $flight = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$flight) {
        die ('flight doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM flights WHERE flightid = ?');
            $stmt->execute([$_GET['flightid']]);
            $msg = 'You have deleted the flight!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: read.php');
            exit;
        }
    }
} else {
    die ('No ID specified!');
}
?>
<link rel="stylesheet" href="crud.css">
<div class="content delete">
	<h2>Cancel Flight #<?=$flight['flightid']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete flight #<?=$flight['flightid']?>?</p>
    <div class="yesno">
        <a href="delete.php?flightid=<?=$flight['flightid']?>&confirm=yes">Yes</a>
        <a href="delete.php?flightid=<?=$flight['flightid']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>