<?php
   include_once "config.php";

    $q = mysqli_query($conn, "SELECT * FROM employee ORDER BY ID");
    $json = array();

    while($data = mysqli_fetch_assoc($q)){
        $json[] = $data;

    }
    $record["userdata"] = $json;
    echo json_encode($record);

?>