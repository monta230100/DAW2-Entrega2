<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length:0');
    header('Content-Type: text/plain');

    $host='localhost';
    $user='root';
    $password='';
    $db='pokemon';

    $con = mysqli_connect($host, $user, $password, $db) or die('Could not connect to DB');
?>