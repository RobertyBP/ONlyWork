<?php
    $vSessao = $_SESSION["logado"] ?? null;
    $uSessao = $_SESSION["usuario"] ?? null;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web-Servidor</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <header>
        <h1>Projeto Desenvolvimento Web-Servidor</h1>
        <div id="btlogout" style=" top: 85px; left: 1155px; position: absolute; font-size: 14px;">
                <?php
                    if(isset($_SESSION) && $vSessao == "true"){
                        echo '<p style="position: relative; top: -30px; left: -30px;">Olá, '.$uSessao;'</p>';
                        echo '<a id="divsair" style="position: relative; left: -35px; top: 20px;" href="./models/logout.php"><button id="botaosair">Sair</button></a>';                    
                    }
                ?>
        </div>
        <div id="menu">
            <?php
                if(isset($_SESSION) && $vSessao == "true"){
                    echo '<form action="./index.php" method="get">
                        <input type="hidden" name="acao" value="cadastrotrabalho" style="position: absolute;">
                        <a href="#"><button type="submit" style="margin-left: -1px;">Cadastro trabalhos</button></a>
                    </form>
                    <form style="position: relative; top: -35px; left: 125px;" action="./index.php"  method="get">
                        <a href=""../index.php""><button style="margin-left: -5px;">Trabalhos disponíveis</button></a>
                    </form>';
                    
                }
            ?>
        </div>
    </header>
</body>
</html>
