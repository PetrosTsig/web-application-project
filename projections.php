<?php
class MoviesP
{
    //variables
    public $name;
    public $date;
    public $date_now;
    public $date_limit;
    public $seats_limit;

    public $movieproj = array();//array list

    function show_projections()//function that connect the projection table and send the data of the table when it`s called
    {
        
        // Create connection
        $conn = mysqli_connect("localhost", "user", "1234", "cinema");
        // Check connection
        if (!$conn)
        {
           die("Connection failed: " . mysqli_connect_error());
        }
        //Select from multiple tables 
        $sql = "SELECT projections.proj_id as id,projections.time_start as start,projections.time_end as end,projections.film_id, "
                . "films.films_id, films.film_title as title, films.film_title as plot from projections left join films on "
                . "projections.film_id=films.films_id order by projections.proj_id";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) >0)
        {
            while($row=mysqli_fetch_assoc($result))// while we have multiple data in the table save it in the array list movieproj
            {

                array_push( $this->movieproj,$row);
            }

            mysqli_close($conn);//close connestion
        
        }
    }   

    function date(){

        $this->name="NO NAME";

        $date=date('Y-m-d');//date formation

        $this->date_now=$date;
        
        $this->date_limit=$date;

        $this->seats_limit=10;//if there is no connection we have placed a 10 seat limit
        
       
         // Create connection
         $conn = mysqli_connect("localhost", "user", "1234", "cinema");
         // Check connection
         if (!$conn) 
         {
            die("Connection failed: " . mysqli_connect_error());
         }
         //select from database settings all the data(name,date_limit,seats_limit)
         $sql = "SELECT * FROM settings";

         $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) >0)//if we have succesfully take the data from the table save it in the local variable
         {
         
             $row=mysqli_fetch_assoc($result);
             $this->name=$row['name'];
             $this->date_limit=$row['date_limit'];
             $this->seats_limit=$row['seats_limit'];
         }
         mysqli_close($conn);//close connestion
         //when the SESSION is runing we saving the data there
         $_SESSION['name']= $this->name;
         $_SESSION['date_now']= $this->date_now;
         $_SESSION['date_limit']= $this->date_limit;
         $_SESSION['seats_limit']= $this->seats_limit;

    }


}
?>