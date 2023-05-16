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
    require("./views/header.view.php");
    
    if(isset($_SESSION) && $vSessao == "true"){
        if($acao == 'cadastrotrabalho'){
            require('./views/cadastrotrabalho.view.php');
        }else if($acao == 'listartrabalhos'){
            require('./views/trabalhos.view.php');
        }else{
            require('./views/trabalhos.view.php');
        }
    }else if ($acao == "cadastrar"){
        require('./views/cadastrousuario.view.php');
    }else if($acao == "logar"){
        require('./views/login.view.php');
    }
?>

    
    
