<?php

session_start();
include 'conn.php';




if (isset($_POST['addcoupon'])) {

  $Loadername = $_POST['Loadername'];
  $Loadbyadmin = $_POST['Loadbyadmin'];
  $Loadamount = $_POST['Loadamount'];
  
  
  $sql = "SELECT * FROM `tblloader` WHERE tblloader.Id='$Loadername'";
  $res = mysqli_query($conn, $sql);
  $row = $res->fetch_assoc();

  $Balance = $row['Balance'];

  if ($row['Balance'] == '') {
    

  $query = mysqli_query($conn, "INSERT INTO `tblload` (`Id`, `Loadtoloader`, `Loadfromadmin`, `Dateofload`, `Amountofload`) VALUES (NULL, $Loadername, $Loadbyadmin, now(), $Loadamount)");


  $query = mysqli_query($conn, "UPDATE tblloader SET Balance = '$Loadamount'  WHERE tblloader.Id='$Loadername'");

  $_SESSION['status']="Sucessfully Added!";
  $_SESSION['status_code']="success";
   header('Location: ../admintransac.php');




  }else {


$Total = $Balance + $Loadamount;

 $query = mysqli_query($conn, "INSERT INTO `tblload` (`Id`, `Loadtoloader`, `Loadfromadmin`, `Dateofload`, `Amountofload`) VALUES (NULL, '$Loadername', '$Loadbyadmin', now(), '$Loadamount')");


    $queryt = mysqli_query($conn, "UPDATE tblloader SET Balance = '$Total'  WHERE tblloader.Id='$Loadername'");

  $_SESSION['status']="Sucessfully Added!";
  $_SESSION['status_code']="success";
  header('Location: ../admintransac.php');



  }








  
}




  ?>