<?php
    include "config.php";
    $input = file_get_contents('php://input');
    $id = json_decode($input, true);
    $response = array();

    $sql = mysqli_query($con, "DELETE FROM pokemon WHERE id = '$id';");

    if($sql){
        $response["message"] = "OK";
    }else{
        $response["message"] = "KO";
    }
    echo json_encode($response);
?>