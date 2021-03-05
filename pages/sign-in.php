<?php 
    require_once '../db/connect.php';

    session_start();

    if(isset($_POST['enter'])):
        $erros = array();

        $email = mysqli_escape_string($connect, $_POST['email']);
        $password = mysqli_escape_string($connect, $_POST['pass']);

        if(empty($email) or empty($password)):
            $erros[] = "<span style=' color: white;
            padding: 20px;
            background:  rgb(188, 33, 33);
            width: 100%;
            display: flex;
            justify-content: center;
            font-size: 15pt;'>O campo email/senha precisa ser preenchido !!! <span>";
        else:
            $sql = "SELECT email FROM users WHERE email = '$email' ";
            $result = mysqli_query($connect, $sql);

            if(mysqli_num_rows($result) > 0):
                $password = md5($password);
                $sql = "SELECT * FROM users WHERE email =  '$email' AND password = '$password' ";
                $result = mysqli_query($connect, $sql);

                    if(mysqli_num_rows($result) == 1):
                        $data = mysqli_fetch_array($result);
                        $_SESSION['log'] = true;
                        $_SESSION['id_user'] = $data['id'];
                        header('Location: ../pages/painel.php');
                    else:
                        $erros[] = "<span style=' color: white;
                            padding: 20px;
                            background:  rgb(188, 33, 33);
                            width: 100%;
                            display: flex;
                            justify-content: center;
                            font-size: 15pt;'>Usuário e senha não conferem!!<span>";
                    endif; 

            else:
                $erros[] = "<span style=' color: white;
                padding: 20px;
                background:  rgb(188, 33, 33);
                width: 100%;
                display: flex;
                justify-content: center;
                font-size: 15pt;'>Usuário inexistente!!!<span>";
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
    <title>Entrar | FINANCE</title>

    <link rel="stylesheet" href="../css/sign-in.css">
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
        <h1>Faça seu login <br/> na plataforma!</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="input">
                <input required type="email" name="email" id="email" placeholder="Email">            
                <span class="error"></span>
            </div>

            <div class="input">   
                <input riquired type="password" name="pass" id="pass" placeholder="Senha">              
                <span class="error"></span>
            </div>

            <div class="forgot-password">
                <a href="#">Esqueci minha senha</a>
            </div>

            <button type="submit" name="enter">ENTRAR</button>


            <div class="sign-up">
                <p>Não tem uma conta? <a href="../pages/register.php">Registre-se!</a> </p>
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