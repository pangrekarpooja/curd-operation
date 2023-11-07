<?php
include_once "config.php";
$id = $_POST["uid"];
  $q = mysqli_query($conn,"DELETE FROM employee WHERE id = '$id'");
  if($q) {
    echo "employee Delete";
  }

?>
