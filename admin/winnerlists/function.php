<?php

session_start();
include 'conn.php';



if (isset($_POST['add'])) {

  $Email = $_POST['Email'];


   $query = mysqli_query($conn, "INSERT INTO `tblplayer` (`Id`, `Email`, `Winner`) VALUES (NULL, '$Email', '')");
   $_SESSION['status']="Sucessfully Added!";
   $_SESSION['status_code']="success";
   header('Location: ../machine.php');

  
}







if (isset($_POST['edit'])) {


  $Id = $_POST['Id'];
  $Email = $_POST['Email'];
  $Winner = $_POST['Winner'];
 

		$sql = "UPDATE tblplayer SET Email = '$Email', Winner = '$Winner'  WHERE tblplayer.Id = '$Id'";
		if($conn->query($sql)){
			 $_SESSION['status']="Sucessfully Update!";
      $_SESSION['status_code']="success";
      header('Location: ../machine.php');
		}
		else{
		$_SESSION['status']=$conn->error;
          $_SESSION['status_code']="error";
		 header('Location: ../machine.php');
		}

  }








if (isset($_POST['reset'])) {

    $sql = "UPDATE tblplayer SET Winner = 1  ";
    if($conn->query($sql)){
       $_SESSION['status']="Sucessfully reset!";
      $_SESSION['status_code']="success";
      header('Location: ../machine.php');
    }
    else{
    $_SESSION['status']=$conn->error;
          $_SESSION['status_code']="error";
     header('Location: ../machine.php');
    }

  }







  ?>