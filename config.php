<?php
//connect with the database cinema
$db_user = "user";
$db_pass = "1234";
$db_name = "cinema";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php

class User
{
    //variables
    public $username;
    public $password;
    public $name;
    public $email;

    function Login()//function for login
    {
        
        // Create connection
        $conn = mysqli_connect("localhost", "user", "1234", "cinema");
        // Check connection
        if (!$conn) 
        {
           die("Connection failed: " . mysqli_connect_error());
        }
        //select from database selecting the required variables
        $sql = "SELECT * FROM users where username='".$this->username. "' and password='".$this->password."'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) >0)
        {
        
            while($row=mysqli_fetch_assoc($result))//while username , password and email exist
            {
                $this->username=$row['username'];
                $this->name=$row['name'];
                $this->email=$row['email'];
            }
            mysqli_close($conn);//close connestion

            if($this->username=="Admin")//if the username is "Admin" send to admin.php page
            {

                $_SESSION['email']=$this->email;
                $_SESSION['name']= $this->name;
                $_SESSION['username']= $this->username;

                Header("Location:admin.php");
            }
            else//else send the user to home.php page
            {
                $_SESSION['email']=$this->email;
                $_SESSION['name']= $this->name;
                $_SESSION['username']= $this->username;
                Header("Location:home.php");
            }
        }   
            mysqli_close($conn);//close connestion
    }
}

?>