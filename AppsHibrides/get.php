<?php
    include "config.php";
    $array = array();
    if($result = mysqli_query($con, "SELECT * FROM pokemon")){
        while($obj = mysqli_fetch_array($result)){
            array_push($array, $obj);
        }
    }
    echo json_encode($array);
?>