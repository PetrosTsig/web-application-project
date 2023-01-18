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
  .container{
    padding: 2rem;
  }

  .slider-wrapper{
    position: relative;
    max-width: 48rem;
    margin: 0 auto;
  }

  .slider {
    display: flex;
    aspect-ratio: 16/9;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    box-shadow: 0 1.5rem 3rem --0.75rem hsla(0, 0%, 0%, 0.25);
    border-radius: 0.5rem;
  }

  .slider img {
    flex: 1 0 100%;
    scroll-snap-align: start;
    object-fit: cover;
  }
  </style>
</head>
<body  style="background-color: #6b728e;">
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
<h2 style="text-align: center; color: white;">Welcome To Our Cinema</h2>
<section class="container">
  <div class="slider-wrapper">
    <div class="slider">
      <img id="slider-1" src="pictures/horror.jpg" alt="horror movies">
      <img id="slider-2" src="pictures/Untitled.jpg" alt="comedy-adventure movies">
      <img id="slider-3" src="pictures/pop.jpg" alt="popcorn">
      <img id="slider-4" src="pictures/cinema-1.jpg" alt="our rooms movies">
    </div>
  </div>
  <hr>
  <p style="text-align: center; color: white;">
  Cinema is a series of moving pictures shown on the screen. Pictures of men and women are taken by a camera in quick succession. 
  They are edited and reeled serially. The reels are then sent to the cinema houses to project and reproduce the pictures on the screen before spectators. 
  Thus, we see the pictures and performances of the actors and actresses in a cinema hall.
  </p>
  <hr>
  <h3 style="text-align: center; color: white;">Why is it called the cinema ??</h3>
  <p style="text-align: center; color: white;">Cinema is from the French cinematographe which comes in part from the greek kinema, meaning movement. 
  So, cinema is really just another word meaning moving picture.
  It also has come to mean more generally the process of film-making and also the building where films are shown.</p>

</section>
</body>
</html>