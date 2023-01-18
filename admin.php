<?php
if( !isset($_SESSION['username'])==='Admin')// Check if not logged in and oif the username is Admin
{
      Header("Location:home.php");
}
include('admin-settings.php');// connect with file admin-settings.php

$ReqCheck =new Admin();
$settings = new Admin();



if(isset($_GET['approved']))//if button approves is clicked 
{
  $check = $_GET['check'];
  
      // Create connection
      $conn = mysqli_connect("localhost", "user", "1234", "cinema");
      // Check connection
      if (!$conn) 
      {
        die("Connection failed: " . mysqli_connect_error());
      }
      //UPDATE from table reservations set the colum approved to 1 where the username is the variable check
      $sql = "UPDATE reservations SET approved='1' WHERE username='".$check."' ";

      $result= mysqli_query($conn, $sql); 

      mysqli_close($conn);//close connestion

      if($result)//if the sql request is succesfull print the message
      {
        echo'<p style="color:253C5D; text-align:center;">The Request Has been Approved Succesfully!</p>';
      }   
    }

if(isset($_GET['sett']))//if button approves is clicked 
{
  $date_limit = $_GET['date_limit'];
  $seats_limit = $_GET['seats_limit'];
  
      // Create connection
      $conn = mysqli_connect("localhost", "user", "1234", "cinema");
      // Check connection
      if (!$conn) 
      {
        die("Connection failed: " . mysqli_connect_error());
      }
      //UPDATE from table settings set the colums date_limit and seats_limit to the new variables that the client want where the username is Cinema
      $sql = "UPDATE settings SET date_limit='".$date_limit."', seats_limit='".$seats_limit."' WHERE name='Cinema' ";

      $result= mysqli_query($conn, $sql); 

      mysqli_close($conn);//close connestion

      if($result)//if the sql request is succesfull print the message
      {
        echo'<p style="color:253C5D; text-align:center;">The Settings has been saved!</p>';
      }   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
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
      input[type="submit"]{
    width: 30%;
    height: 30px;
    border: 1px solid;
    background: rgb(255, 0, 0);
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
  }
  input[type="submit"]:hover{
    border-color: rgb(255, 0, 0);
    transition: .5s;
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
<h2 style="text-align: center; color: white;">Control panel</h2>
<br>
<div>
<form method="GET" style="text-align: center; color: white;">
<h3 style="text-align: center;">Ticket Requests</h3>
<?php
  $ReqCheck -> AccReq();//calling function AccReq
?>
<br>
<input  type="submit" name="approved" value ="Approve requests">

</form>
</div>

<br>
<hr>

<div>
<form method="GET" style="text-align: center; color: white;">
<h3 style="text-align: center;">Change Date And Seats Limit</h3>
<p style="text-align: center;">On Going Settings:</p>

<?php

  $settings -> date_and_seat();//calling function date_and_seats
?>

</form>
</div>
<hr>
<div>
<form method="GET" style="text-align: center;">
<h4 style="text-align: center;color: white;">Change Date Limit</h4>
<div>
<input type="date" name="date_limit" placeholder="yyyy-mm-dd" required>
</div>
<h4 style="text-align: center;color: white;">Change Seats Limit</h4>
<input type="number" name="seats_limit" placeholder="1" min="1" max="20" required>
<br>
<hr>
<input  type="submit" name="sett" value ="Change Settings">
</form>
</div>

</body>
</html>