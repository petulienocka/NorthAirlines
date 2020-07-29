<!DOCTYPE html>
<html lang="en">

<head>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="nav.css">
  <title>North Airlines</title>
</head>


<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light w3-bottombar w3-border-grey">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand "><img class="logo" src="logo.png" />

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php">Home</a></li>
          <?php if (isset($_SESSION['email'])) : ?>
            <li class="nav-item"><a href="profile.php">Profile</a></li>
          <?php else : ?>
            <li class="nav-item"><a href="signup.php">SignUp</a></li>
          <?php endif; ?>
          <li class="nav-item"><a href="contact.php">Contact</a></li>
          <?php if (isset($_SESSION['email'])) : ?>
            <li><a class="link" href="logout.php" style="text-decoration:none">Logout</a></li>
          <?php else : ?>
            <li class="open-btn nav-item">
            <li class="open-button" onclick="openForm()"><i class=" w3-hide-small material-icons" style="font-size:45px; color:#00afc5;
             text-shadow:1px 1px 3px #000000; position:absolute; right:10%; top:35%;">person</i>Login</li> <?php endif; ?>
          <div class="login-popup">
            <div class="form-popup" id="popupForm">
              <form action="authenticate.php" method="post" class="form-container">
                <input type="text" placeholder="Email" name="email" id="email" required />
                <br /><br />
                <input type="password" placeholder="Password" name="password" id="password" required />
                <br /><br />
                <button type="submit" name="submit" value="Login" class="btn">
                  Log in
                </button>
                <br />
                <button type="button" class="btn cancel" onclick="closeForm()">
                  Close
                </button>
                <br />
                Create account
              </form>
            </div>
          </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script>
    function openForm() {
      document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("popupForm").style.display = "none";
    }
  </script>
</body>

</html>