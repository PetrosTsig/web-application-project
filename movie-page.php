<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .button {
    background-color: #000000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 8px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: flex;
    justify-content: center;
  }
  .column {
    width: 30%;
    padding: 10px;
    margin-left: auto;
    margin-right: auto;
  }
  
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
  
    </style>

</head>
<body style="background-color: #6b728e;">
<a href="home.php">
<img src="pictures/logo1.png" alt="Cinema Logo" class="center" style="width: 200px;height: 200px;">
</a>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="movie-page.php">Movies</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">About <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="company.php">Company</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="contact-page.php">Contact Us</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Settings <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="log-in.php">Login</a></li>
          <li><a href="log-out.php?logout=ok">Logout</a></li>
          <li><a href="sign-up.php">Signup</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<br>

<h2 style="text-align: center; color: white;">See our collection down below !</h2>
<hr>

<div class="row">
  <div class="column">
    <h2 style="text-align: center;  color: white;">The Horror Movie</h2>
    <img src="pictures/horrormovie.jpg" alt="The horror movie" class="center" style="width: 300px;height: 170px;">
    <p></p>
    <a href="reserv-page.php" class="button">Book Now</a>
  </div>
  <div class="column">
    <h2 style="text-align: center;  color: white;">The Adventure Movie</h2>
    <img src="pictures/adventure.jpg" alt="The Adventure Movie" class="center" style="width: 300px;height: 170px;">
    <p></p>
    <a href="reserv-page.php" class="button">Book Now</a>
  </div>
  <div class="column">
    <h2 style="text-align: center;  color: white;">The Comedy Movie</h2>
    <img src="pictures/comedy.jpg" alt="The Comedy Movie" class="center" style="width: 300px;height: 170px;">
    <p></p>
    <a href="reserv-page.php" class="button">Book Now</a>
  </div>
</div>

</body>
</html>