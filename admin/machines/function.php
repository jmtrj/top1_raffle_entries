<?php

session_start();
include 'conn.php';

require '../vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;







if (isset($_POST['upload'])) {

  $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");
        $rowCount = 0;
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            if ($rowCount == 0) {
                $rowCount++;
                continue;
            }
            $sqlInsert = "INSERT into  `tblplayer` (`Id`, `Email`, `Winner`) values (NULL,'" . addslashes($column[0]) . "','" . addslashes($column[1]) . "')";
            $result = mysqli_query($conn, $sqlInsert);
            if (! empty($result)) {
                $rowCount++;
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
        fclose($file);
        if ($type == "success") {
            $_SESSION['status']="Import Successfully";
            $_SESSION['status_code']="success";
            header('Location: ../machine.php');
        } else {
            $_SESSION['status']=$message;
            $_SESSION['status_code']=$type;
            header('Location: ../machine.php');
        }
    }



}

































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
 $resets = $_POST['resets'];



    $sql = "UPDATE tblplayer SET Winner = '$resets'  ";
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