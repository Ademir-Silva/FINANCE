<?php 
    require_once '../db/connect.php';
    session_start();

    if(isset($_POST['register'])):
        $erros = array();

        $email = mysqli_escape_string($connect,$_POST['email']);
        $name = mysqli_escape_string($connect,$_POST['name']);
        $password = mysqli_escape_string($connect,$_POST['pass']);
        $password = md5($password);

        if(empty($email) or empty($password)):
            $erros[] = "<span style=' color: white;
            padding: 20px;
            background:  rgb(188, 33, 33);
            width: 100%;
            display: flex;
            justify-content: center;
            font-size: 15pt;'>Todos os campos precisam ser preenchido !!! <span>";
        else:
            $sql = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$password')";
            $result = mysqli_query($connect, $sql);

            if($result):       
                //$data = mysqli_fetch_array($result);
                $_SESSION['register'] = true;
                $_SESSION['message'] = "<span style='color: white;
                        padding: 20px;
                        background: #38af38;
                        width: 100%;
                        display: flex;
                        justify-content: center;
                        font-size: 15pt;'>Cadastro efetuado com sucesso !!! <span>";
                        header('Location: ../pages/sign-in.php');

            else:
                $erros[] = "<span style=' color: white;
                padding: 20px;
                background:  rgb(188, 33, 33);
                width: 100%;
                display: flex;
                justify-content: center;
                font-size: 15pt;'>Usuário já existe !!!<span>";
            endif;
        endif;    
    endif;   
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

<header>
 <?php
    
    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;

?>
</header>

    <div class="container">
        <h1>Registre seu cadastro<br/> na plataforma!</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="input">
                <input required type="email" name="email" id="email" placeholder="Email">            
                <span class="error"></span>
            </div>

            <div class="input">
                <input required type="text" name="name" id="name" placeholder="Nome">            
                <span class="error"></span>
            </div>

            <div class="input">   
                <input required type="password" name="pass" id="pass" placeholder="Senha">              
                <span class="error"></span>
            </div>


            <button type="submit" name="register">CADASTRAR</button>


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
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/logs.js"></script>
</body>
</html>