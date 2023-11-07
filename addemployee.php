<?php
   include_once "config.php";
   
   $name     =   $_POST["txtName"];
   $eid      =   $_POST["txtEid"];
   $password  =  $_POST["txtPass"];
   $cnm       =  $_POST["txtCmpName"];
  
    $q = mysqli_query($conn, "INSERT INTO employee(Name, emailid, password, company_name)
   VALUE('$name' ,'$eid', '$password', '$cnm')");
    
   if($q){
    //response
    echo "Add Employee";
   }
?>




<!-- empty he function check karte yanarya aarry cha  -->