

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

<!-- R-ijYNAiUnoPslUjj97xNAol -->

    

    <div class="container">
        <h1>Faça seu login <br/> na plataforma!</h1>

        <!-- <div class="finance">
                <img src="../assets/FINANCE.svg">
            </div> -->
        <form action="../pages/painel.php" method="POST">

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

            <button type="submit">ENTRAR</button>


            <div class="sign-up">
                <p>Não tem uma conta? <a href="./pages/sign-up.html">Registre-se!</a> </p>
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

        <span class="msg">
        <p id="msg"></p>
    </span>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/logs.js">

    </script>
</body>
</html>