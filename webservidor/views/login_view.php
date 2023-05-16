<?php

    include_once("header.view.php");
    

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Planilha SETPAS - Carambeí (TRANSPORTE)</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div id="containerlogin" class="container">
        <div class="cardlogin">
            <p style="margin: 0; margin-top: 30px; font-weight: bold; 
            font-size: 20px; text-align: center;">Login</p>
            <form action="./controller/usuario.controller.php" method="post">
                <p style=" margin: 0; margin-top: 85px;font-weight: bold; position: relative; left: 100px;">Email</p>
                <input type="text" style="height: 25px; font-size: 15px; position:relative; 
                left: 160px; top: -21px; width: 240px;" name="emaillogin">
                <p style="margin: 0; margin-top: 25px; font-weight: bold; position: relative; left: 100px">Senha</p>
                <input type="password" style="height: 25px; font-size: 15px; position:relative; 
                left: 160px; top: -21px; width: 240px;" name="senhalogin">
                <input type="hidden" name="acao" value="logar" style="position: relative;">
                <button class="botaologin" type="submit">Entrar</button>
                
            </form>

            <div style="padding-top: 35px; left: 55px; width: 400px; height: 100px; position: relative; ">
                <form action="index.php" method="get">
                    <input type="hidden" name="acao" value="cadastrar" style="position: absolute;">
                    <p style="text-align: center;">Ainda não possui uma conta? 
                        <a href="#"> <button style="background: none;
                            color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;
                            outline: inherit; box-shadow: none;" type="submit">Cadastre-se!</button></a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
