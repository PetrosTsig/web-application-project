<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
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
<h2 style="text-align: center; color: white;">Read More About Our Company</h2>
<hr>
<img src="pictures/outside.jpg" alt="outside cinema building" class="center" style="height: 300px; width: 400px; ">
<p style="text-align: center; color: white;">Our Company took the name Cinema films out of its title and used that for convenience. 
    This is because we believe cinema has always been a community,
    so when you see people together like this or at least have an opportunity to experience what it's like to watch some movies with others,
     why would anyone not be involved?</p>
</body>
</html>