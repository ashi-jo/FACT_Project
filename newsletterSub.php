<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

  include("_dbConnect.php");
  $email_id = $_POST['email'];

  $existSql = "SELECT * FROM `newsletter` where email_id = '$email_id'";
  $result = mysqli_query($conn, $existSql);
  $numRows = mysqli_num_rows($result);
  if($numRows==0){
    $insertSql = "INSERT INTO `newsletter` (`email_id`,`timestamp`) VALUES ( '$email_id', current_timestamp())";
    $result = mysqli_query($conn, $insertSql);
  }
}

