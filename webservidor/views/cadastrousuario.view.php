<?php

    include_once("header.view.php");
   

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>web</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div id="containerlogin" class="container">
        <div class="cardlogin">
            <p style="margin: 0; margin-top: 30px; font-weight: bold; 
            font-size: 20px; text-align: center;">Cadastrar</p>
            <form action="./controller/usuario.controller.php" method="post">
                <p style="margin: 0; margin-top: 65px; position: relative; left: 100px; font-weight: bold;">Nome</p>
                <input type="text"style="height: 25px; font-size: 15px; position:relative; 
                left: 160px; top: -21px; width: 240px;" name="nomelogin">
                
                <p style="margin: 0;  left: 100px; margin-top: 35px; position: relative; font-weight: bold;">Email</p>
                <input type="text" placeholder="@Email.com" style="height: 25px; font-size: 15px; position:relative; 
                left: 160px; width: 240px; top: -21px;" name="emaillogin">
                <p style=" left: 100px; position: relative; margin: 0; margin-top: 35px; font-weight: bold;">Senha</p>
                <input type="password" style="height: 25px; font-size: 15px; position:relative; 
                left: 160px; top: -21px; width: 240px;" name="senhalogin">
                <input type="hidden" name="acao" value="cadastrar" style="position: relative;">
                <button class="botaologin" type="submit">Cadastrar</button>
                
            </form>

            <div style="padding-top: 20px; left: 55px; width: 400px; height: 50px; position: relative; ">
                <form action="index.php" method="get">
                    <input type="hidden" name="acao" value="logar" style="position: absolute;">
                    <p style="text-align: center;">Já possui uma conta? 
                        <a href="#"> <button style="background: none;
                            color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;
                            outline: inherit; box-shadow: none;" type="submit">Entrar</button></a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>