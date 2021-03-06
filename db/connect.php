<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "finance";

    $connect = mysqli_connect($server, $user, $password, $db_name);
    mysqli_set_charset($connect, "utf8");

    if(mysqli_connect_error()):
        echo "Falha na conexão!!".mysqli_connect_error();
    endif;

?>