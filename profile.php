<?php
session_start();

require_once('nav.php');


// We need to use sessions, so you should always start sessions using the below code.

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'WebDev19';
$DATABASE_NAME = 'northairlines';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>North Airlines</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="profile.css">

</head>
<body class="w3-light-grey">




    <div class="w3-content w3-left" style="max-width:1200px;">
  <div class="w3-row-padding w3-padding-16">
    

  
  <div class="w3-third w3-margin-bottom">
      <img src="oslo1.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Get your special offer today !</h3>
        <p>HELSINKI - OSLO</p>
        <p>From 650 dkk</p>
        <p>Date of departure: 17.1.2020</p>
        <p>Time of departure: 10:30</p>
        <a href="offer.php"><button class="w3-button w3-block w3-cyan w3-margin-bottom">Book</button></a>
      </div>
    </div>
    
    
    
    
    <div class="w3-third w3-margin-bottom">
      <img src="copnehagen1.jpg" alt="Sweden" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Offer of the month - 50% off</h3>
        <p>OSLO - COPENHAGEN</p>
        <p>From 450 dkk</p>
        <p>Date of departure: 25.1.2020</p>
        <p>Time of departure: 19:30</p>
        <button class="w3-button w3-block w3-cyan w3-margin-bottom"><a href="crud.php">Book</a></button>
        
      </div>
    </div>

    

 
    
    <div class="w3-third w3-margin-bottom">
  <img src="animation.gif" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
      <h3>Welcome to your profile</h3>
      <p><?=$_SESSION['email']?></p>
        <p>See offers</p>
        <p><a href="crud.php">Click for - FLIGHTS OVERVIEW</a></p>
       
        <p>Edit your profile down below</p>
        
       
        <button class="w3-button w3-block w3-cyan w3-margin-bottom" onclick="openForm1()">Edit</button>

        </div>
    </div>

        <div class="w3-container w3-right w3-padding-32 w3-margin-right">  

<div class="login-popup">
              <div class="form-popup1" id="popupForm1">
                <form action="/action_page.php" class="form-container">
                <input type="text" id="name" placeholder="Name" name="name" required />
                  <br /><br />
                  <input type="text" id="email" placeholder="Email" name="email" required />
                  <br /><br />
                  <input type="password" id="psw" placeholder="Old Password" name="psw" required />
                  <br /><br />
                  <input type="password" id="psw" placeholder="New Password" name="psw" required />
                  <br /><br />
                  <button type="submit" class="btn" href="profile.php">
                    Save
                  </button>
                  <br />
                  <button type="button" class="btn cancel" onclick="closeForm1()">
                    Close
                  </button>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
</div>
        
     
 
 



    <div class="w3-bottom w3-large ">
  <div class="w3-bar w3-cyan w3-center w3-padding">
    
    <img src="fb.png" alt="facebook" style="width:35px;">
    <img src="youtube.png" alt="youtube" style="width:35px;">
    <img src="google.png" alt="google" style="width:35px;">
  </div>
</div>
 
  <script>
    function openForm1() {
      document.getElementById("popupForm1").style.display = "block";
    }
    function closeForm1() {
      document.getElementById("popupForm1").style.display = "none";
    }
  </script>
</body>
</html>