<?php
  require'includes/conn.php';

$query = "SELECT * FROM tblplayer ";
$result = mysqli_query($conn, $query);

$items = array();
while ($row = mysqli_fetch_assoc($result)) {
    $items[$row['Email']] = $row['Winner'];
}

echo json_encode($items);
?>


