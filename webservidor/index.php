<?php

    if (!session_id()) {
        session_start();
    }

    $acao = "null";
    if(isset($_GET["acao"])){
        $acao = $_GET["acao"];
    }else{
        $acao = "logar";
    }
    $vSessao = $_SESSION["logado"] ?? null;
    require("./views/header_view.php");
    
    if(isset($_SESSION) && $vSessao == "true"){
        $rotas =[
            "\trabalho" => "views\trabalhos_views.php",
            "\usuario" => "views\usuario_views.php",
            "\caduser" => "views\cadastrousuario_views.php",
            "\cadtrabalho" => "views\cadastrotrabalho_views.php",
            "\login" => "views\login_views.php"
        ];
        $url = $_SERVER["REQUEST_URI"];
        if(array_key_exists($url, $rotas)):
            require($rotas[$url]);
        else:
            echo "  Erro 404! Página não existe ";
        endif;
    }
?>

    
    
