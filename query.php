
<?php
  require'includes/conn.php';
  
  $query=mysqli_query($conn, "SELECT Prize FROM `tblroullete` ") or die(mysqli_error());  
  $fetch=mysqli_fetch_all($query);
  $items = [];
  foreach($fetch as $v) array_push($items, $v[0]);
  echo json_encode(array("items"=>$items )); 
  
  
?>
