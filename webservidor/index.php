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
        if($acao == 'cadastrotrabalho'){
            require('./views/cadastrotrabalho_view.php');
        }else if($acao == 'listartrabalhos'){
            require('./views/trabalhos_view.php');
        }else{
            require('./views/trabalhos_view.php');
        }
    }else if ($acao == "cadastrar"){
        require('./views/cadastrousuario_view.php');
    }else if($acao == "logar"){
        require('./views/login_view.php');
    }
?>

    
    
