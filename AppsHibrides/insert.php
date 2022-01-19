<?php
    include "config.php";
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    $response = array();

    $nombre = $_POST["nombre"];
    $altura = $_POST["altura"];
    $largura = $_POST["largura"];


    $target_dir = "C:/Users/crist/OneDrive/Escritorio/Apps Hibrides/True_Project/true_project/src/assets/imagenes/";
    $app_target = "assets/imagenes/".basename($_FILES["imagen"]["name"]);
    $target_file=$target_dir.basename($_FILES["imagen"]["name"]);
    $uploadOk = 0;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false){
        $uploadOk = 1;
    }else{
        $uploadOk = 0;
    }
    if(file_exists($target_file)){
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }

    $sql = mysqli_query($con, "INSERT INTO pokemon (nombre, altura, largura, imagen) VALUES ('$nombre', '$altura', '$largura', '$app_target');");
    if($sql && $uploadOk == 1){
        if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
            $response["message"] = "OK";
        }else{
            $response["message"] = "KO";
        }
    }else{
        $response["message"] = "KO";
    }
    echo json_encode($response);
?>