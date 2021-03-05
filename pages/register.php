<?php
 session_start(); 
/* ob_start(); */

/* $button_register = filter_input(INPUT_POST, 'button_register', FILTER_SANITIZE_STRING);

if($button_register){
    
    include_once '../db/connect.php';
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT );

    $return = "INSERT INTO users (email, name, password) VALUES ('".$data['email']."', '".$data['name']."', 
    '".$data['pass']."' )" ;

    $result =  mysqli_query($conn, $return);
}
 */
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se | FINANCE</title>

    <link rel="stylesheet" href="../css/register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">  

    <meta name="google-signin-client_id" content="29031214912-fpofigi6l7aiiuie8ia00v0036q7fo0s.apps.googleusercontent.com">

    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>

<body>

    <div class="container">
        <h1>Registre seu cadastro<br/> na plataforma!</h1>

        <form action="../pages/process.php" method="POST">

            <div class="input">
                <input required type="email" name="email" id="email" placeholder="Email">            
                <span class="error"></span>
            </div>

            <div class="input">
                <input required type="text" name="name" id="name" placeholder="Nome">            
                <span class="error"></span>
            </div>

            <div class="input">   
                <input riquired type="password" name="pass" id="pass" placeholder="Senha">              
                <span class="error"></span>
            </div>


            <button type="submit" name="button_register">CADASTRAR</button>


            <div class="sign-in">
                <p>Já tem uma conta? <a href="../pages/sign-in.php">Logar</a></p>
            </div>

            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
            </div>
            
            <div class="login-google">
                <p>Ou entre com:</p>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
            </div>

        </form>

       <!--  <span class="msg">
        <p id="msg"></p>
    </span> -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/logs.js"></script>
</body>
</html>