<?php

  $conn = mysqli_connect("localhost", "root", "", "employeedb1");

  if(!$conn){   //error dakvasti ghetla

    die("Connection Error". mysqli_connect_error());
  }
  
?>