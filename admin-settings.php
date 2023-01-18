<?php
class Admin{
    //variables
    public $approved;

    function AccReq()//function that takes the reservation requests and post them to the admin.php page
    {
        // Create connection
        $conn = mysqli_connect("localhost", "user", "1234", "cinema");
        // Check connection
        if (!$conn) 
        {
           die("Connection failed: " . mysqli_connect_error());
        }
        //Select all from table reservations
        $sql = "SELECT * from reservations ";
        $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) >0)
         {
             $row=mysqli_fetch_assoc($result);//printing a row from the table 
             echo "<div>";
             echo  "<label><input type= 'checkbox' name='check' value=$row[username]>name: $row[username] | date: $row[res_date] | seat: $row[seat] | projection: $row[proj_id] | approved: $row[approved]</label>";
             echo "</div>";
             while($row=mysqli_fetch_assoc($result))//while we have more rows than one print them 
             {
                 echo "<div>";
                 echo  "<label><input type= 'checkbox' name='check' value=$row[username]>name: $row[username] | date: $row[res_date] | seat: $row[seat] | projection: $row[proj_id] | approved: $row[approved]</label>";
                 echo "</div>";
                 
             }
           
             mysqli_close($conn);//close connection
         }      
    }

    function date_and_seat()//function that takes the settings and post them to the admin.php page
    {
         // Create connection
        $conn = mysqli_connect("localhost", "user", "1234", "cinema");
        // Check connection
        if (!$conn) 
        {
           die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * from settings ";
        $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) >0)
         {
             $row=mysqli_fetch_assoc($result);//printing a row from the table 
             echo "<div>";
             echo  "<label><p> seats limit: $row[seats_limit] | date limit: $row[date_limit]</p></label>";
             echo "</div>";
             while($row=mysqli_fetch_assoc($result))//while we have more rows than one print them 
             {
                 echo "<div>";
                 echo  "<label><p> seats limit: $row[seats_limit] | date limit: $row[date_limit]</p></label>";
                 echo "</div>";
                 
             }
             mysqli_close($conn);//close connection
    }
  }
}
?>