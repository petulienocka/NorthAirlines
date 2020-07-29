<?php

session_start();


$host = "localhost";
$dbUsername = "root";
$dbPassword = "WebDev19";
$dbname = "northairlines";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$conn->autocommit(false);

$flightid = $conn->query('SELECT flightid FROM flights WHERE flightid=20');

$email = $_SESSION['email'];
$userid = $conn->query("SELECT userid FROM users WHERE email LIKE '$email%'");

while ($row = $userid->fetch_assoc()) {

    $suserid = $row['userid'];
}

while ($row2 = $flightid->fetch_assoc()) {

    $sflightid = $row2['flightid'];
}

echo 'you have now booked the offer';

$conn->query("INSERT INTO bookings (userid, flightid) VALUES ($suserid,  $sflightid)");
$conn->commit();
