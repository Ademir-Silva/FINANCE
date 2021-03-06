<?php

/* session_start();

include_once("../db/connect.php"); 

$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);

$result= "SELECT * FROM users WHERE email='$email' ";
$result_user = mysqli_query($connect, $result);

if(($result_user) AND ($result_user->num_rows != 0)){
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $_SESSION['userName'] = $userName;
    $resulted = '../pages/sign-in.php';
    echo $resulted;
}else{
    $resulted = 'Erro';
    echo (json_encode($resulted));
} */

