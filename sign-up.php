<?php
session_start();
include ("config.php");// connect with file config

if( isset($_SESSION['username']))// Check if not logged in
{
      Header("Location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
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
  .body1{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background: linear-gradient();
    height: 100vh;
  }

  .center1{
    position:absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: rgb(255, 255, 255);
    border-radius: 10px;
  }

  .center1 h1 {
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
  }

  .center1 form {
    padding: 0 40px;
    box-sizing: border-box;
  }

  form .txt_field{
    position: relative;
    border-bottom: 2px solid  #adadad;
    margin: 30px 0;
  }

  .txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
  }

  .txt_field label{
    position: absolute;
    top: 50%;
    left: 155px;
    color: #adadad;
    transform: translate(-50%);
    font-size: 16px;
    pointer-events: none;
  }

  .txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    background: black;
    transition: .5s;
  }

  .txt_field input:focus ~ label,
  .txt_field input:valid ~ label{
    top: -5px;
    color: black;
  }

  .txt_field input:focus ~ span,
  .txt_field input:valid ~ span{
    width: 100%;
  }

  input[type="submit"]{
    width: 100%;
    height: 50px;
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
<body class="body1" style="background-color: #6b728e;">

<div>
<?php
if (isset($_POST['create']))//if user click create insert the data to table users 
{
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $name        = $_POST['name'];
    $email       = $_POST['email'];

    //insert data to table users
    $sql = "INSERT INTO users (username, password, name, email ) VALUES(?,?,?,?)";

    $stmtinsert = $db->prepare($sql);//prepare and send sql request

    $result = $stmtinsert->execute([$username, $password, $name, $email]);//execute data after sending request

    if($result)//if data saved succesfully to table echo mesage
    {
        echo '<h4 style="text-align: center; color:253C5D;">User sumbitted</h4>';
        echo '<p style="text-align: center;"><a href="log-in.php">Login Now</a></p>';
    }
    else{
        echo '<h4 style="text-align: center; color:red;">There were erros while saving the data.</h4>';
    }
} 
?>
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
<div class="center1">
  <h1>Sign up</h1>
  <form method="post">
    <div class="txt_field">
      <input type="text" name="username" required>
      <span></span>
      <label>Username</label>
    </div>
    <div class="txt_field">
      <input type="password" name="password" required>
      <span></span>
      <label>Password</label>
    </div>
    <div class="txt_field">
      <input type="text" name="name" required>
      <span></span>
      <label>Name</label>
    </div>
    <div class="txt_field">
      <input type="email" name="email" required>
      <span></span>
      <label>E-mail</label>
    </div>
    <input type="submit" name="create" value="Sign up">

    </div>
  </form>

</div>
    
</body>
</html>