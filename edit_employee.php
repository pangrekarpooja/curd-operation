<?php
include_once "config.php";
$id    = $_POST["sid"];
$name  =   $_POST["txtName"];
$eid   =   $_POST["txtEid"];
$pass  =  $_POST["txtPass"];
$cnm   =  $_POST["txtCmpName"];
mysqli_query($conn, "UPDATE employee SET name = '$name', emailid='$eid',password ='$pass', company_name='$cnm' WHERE id ='$id'");
$row = mysqli_affected_rows($conn);
if($row) {
    echo "Employee Updated";
}
else {
    echo "Not Updated";
}

?>