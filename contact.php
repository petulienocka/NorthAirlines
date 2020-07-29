<?php
require_once('nav.php');
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>North Airlines</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    
  
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


    
    <link rel="stylesheet" href="contact.css">
    <script src="script.js"></script>

</head>

<body>

<div class="w3-content" style="max-width:1900px">

<!-- Introduction menu -->
<div class="w3-col l5 w3-right">
  <!-- About Card -->
  <div class="w3-margin ">
    
  <div class="w3-container w3-white w3-padding-16 ">
  <h1>Contact us</h1>
  
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px; ">

      
        <div class="w3-half w3-margin-bottom">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" placeholder="Your email" required>
          </div>

          <div class="w3-half w3-margin-bottom">
            <label>Email</label>
            <input class="w3-input w3-border" type="text" placeholder="Your phone number" required>
          </div>
          
          
          <div class="w3-full">
            <label>Subject</label>
            <input class="w3-input w3-border" type="text" list="departure" autocomplete=off placeholder="Choose the subject" required>
            <datalist id="departure">
<option>Baggage</option>
<option>Booking</option>
<option>Reeboking & Cancellation</option>
<option>Check in</option>
<option>Medical Questions</option>
<option>Traveling with kids</option>
<option>Other</option>

</datalist>
          
          </div>
        
        <br>
      
        <div class="w3-full">
            <label><i class="fa fa-envelope"></i>Message</label>
          <textarea class="w3-input w3-border" type="textarea" ></textarea>
          </div>
        </div>
  <br>
        <button class="w3-button " type="submit">Send</button>

   
      </form>
    </div>
  </div>


<!--
  <div class="w3-content" style="max-width:1900px;">
  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="oslo.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single trip</h3>
        <p>Norway</p>
        <p>Including accomodation</p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="stockholm.jpg" alt="Sweden" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Family trip</h3>
        <p>Sweden</p>
        <p>Including accomodation</p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="helsinki.jpg" alt="Finland" style="width:100%;">
      <div class="w3-container w3-white">
        <h3>Couple trip</h3>
        <p>Finland</p>
        <p>Including accomodation</p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi">
        </i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose</button>
      </div>
    </div>
  </div>
-->
 
  <script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>





</body>
</html>
