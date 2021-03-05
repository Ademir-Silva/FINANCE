<?php

session_start();

include_once("../db/connect.php"); 

$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);

$result= "SELECT * FROM loginUser WHERE email='$email' LIMIT 1";
$result_user = mysqli_query($conn, $result);

if(($result_user) AND ($result_user->num_rows != 0)){
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $_SESSION['userName'] = $userName;
    $resulted = '../pages/painel.php';
    echo $resulted;
}else{
    $resulted = 'Erro';
    echo (json_encode($resulted));
}

