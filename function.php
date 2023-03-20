<?php
  require'includes/conn.php';

  $winner = $_POST["winner"];
  

  $sql = "INSERT INTO `tblwinner` (`Id`, `Email`) VALUES (NULL, '$winner ')";


    if ($conn->query($sql) === TRUE) {


       $query = mysqli_query($conn, "DELETE FROM `tblplayer`  WHERE tblplayer.Email='$winner'");


      
    echo "Data inserted successfully";



  

  } else {
    echo "Error inserting data: " . $conn->error;
    }

   // code...
 
 


    

  $conn->close();

?>


