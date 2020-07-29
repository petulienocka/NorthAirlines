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
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>

<body>

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1900px">


<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l7 s12">
  <!-- Blog entry -->
  <div class="w3-margin">
  <img  id="plane" src="airplane.png" alt="AirPlane" class="rotate w3-hide-small w3-animate-zoom">
  </div>
  <div class="w3-hide-small w3-display-topleft w3-cyan w3-hover-grey"
   style="top:30%;opacity:0.7;width:50%">
  <h3>Scandinavian Flights</h3><h4>the best option to travel</h4>
</div>

</div>


<!-- Introduction menu -->
<div class="w3-col l5 ">
  <!-- About Card -->
  <div class="w3-margin ">
    
  <div class="w3-container w3-white w3-padding-16 ">
  
      <form action="search.php"  method="post">
        <div class="w3-row-padding" style="margin:0 -16px; ">

      
        <div class="w3-half w3-margin-bottom">
            <label><i class="material-icons">local_airport</i>From</label>
            <input class="w3-input w3-border" name="departure" type="text" list="departure" autocomplete=off placeholder="Enter the name of the city" required>
            <datalist id="departure">
<option>Copenhagen/CPH</option>
<option>Billind/BLL</option>
<option>Stockholm/STH</option>
<option>Malmo/MLM</option>
<option>Oslo/OSL</option>
<option>Bergen/BRG</option>
<option>Helsinki/HKI</option>
<option>Rovaniemi/RVN</option>
</datalist>

          </div>
          
          
          <div class="w3-half">
            <label><i class="material-icons">local_airport</i>To</label>
            <input class="w3-input w3-border" type="text" name="arrival" list="departure" autocomplete=off placeholder="Enter the name of the city" required>
         <datalist id="departure">
<option>Copenhagen/CPH</option>
<option>Billind/BLL</option>
<option>Stockholm/STH</option>
<option>Malmo/MLM</option>
<option>Oslo/OSL</option>
<option>Bergen/BRG</option>
<option>Helsinki/HKI</option>
<option>Rovaniemi/RVN</option>
</datalist>

          
          
          
          </div>
        </div>
        
        <br>
        <div class="custom-control custom-radio custom-control-inline">
					<label>
						<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"checked> <span class="label-text">One Way</span>
					</label>
				</div>
				  <div class="custom-control custom-radio custom-control-inline">
					<label>
						<input type="radio" onclick="javascript:yesnoCheck();"  name="yesno" id="yesCheck"> <span class="label-text">Round Trip</span>
					</label>
				</div>
    <br><br>
          <div class="w3-half w3-margin-bottom">
            <label>Departing from</label>
            <input class="w3-input w3-border" type="text" name="datepicker1" id="datepicker1" placeholder="Enter the date" >
          </div>
        
          <div class="w3-half" id="ifYes" style="visibility:hidden">
            <label>Return on</label>
            <input class="w3-input w3-border" type="text" name="datepicker2" id="datepicker2" placeholder="Enter the date" >
          </div>
        
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Adults</label>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-child"></i> Kids</label>
          <input class="w3-input w3-border" id="myInput" type="number" value="0" name="Kids" min="0" max="6">
          </div>
        </div>
  

          
        <a href="search.php"><button class="w3-button" name="search" id="Btn"  value="submit" type="submit"> Search flight</button>
      </form>
    </div>
  </div>

  <script>
var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("Btn").click();
  }
});
</script>

    
</body>
</html>