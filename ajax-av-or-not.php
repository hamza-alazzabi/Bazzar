<?php
  include 'database-connect.php';
  $getAvailablity = $conn->prepare("SELECT availablity FROM million WHERE phone_name LIKE 'iphone 6s'");
  $getAvailablity->execute();
  $availablity = $getAvailablity->fetch(PDO::FETCH_ASSOC);
  if ($availablity['availablity'] == 'Available'){
    echo 'available';
  }else if($availablity['availablity'] !== 'Available'){
    echo 'not available';
  }
 ?>
