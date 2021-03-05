<?php 

session_start();
include_once('../db/connect.php');


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
$password = password_hash($password, PASSWORD_DEFAULT );

$insert_db_user = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$password')";
$return_user = mysqli_query($connect, $insert_db_user);

if(mysqli_insert_id($connect)){
    $_SESSION['message'] = "<span style=' color: white;
    padding: 20px;
    background: #38af38;
    width: 100%;
    display: flex;
    justify-content: center;
    font-size: 15pt;'>Cadastro efetuado com sucesso !!! <span>";
    header("Location: ../pages/sign-in.php");
}else{

    $_SESSION['message'] = "<span style=' color: white;
    padding: 20px;
    background: rgb(188, 33, 33);
    width: 100%;
    display: flex;
    justify-content: center;
    font-size: 15pt;'>Cadastro não foi efetuado com sucesso !!! <span>";
    header("location: ../pages/register.php");
}

?>