<?php
    require("./vendor/autoload.php");

    if (!session_id()) {
        session_start();
    }
    /*$rotas = [
        "/forward_work" => "./views/cadastrotrabalho.view.php",
        "/sign" => "./views/cadastrousuario.view.php",
        "/login" => "./views/login.view.php",
        "/work" => "./views/trabalhos.view.php"
    ];
    $url = $_SERVER["REQUEST_URI"];
    if (array_key_exists($url,$rotas)) {
        require($rotas[$url]);
    } else{
        echo "<script type='text/javascript'> 
                alert('Erro 404!');
            </script>";
    }*/
    $acao = "null";
    if (isset($_GET["acao"])) {
        $acao = $_GET["acao"];
    } else {
        $acao = "logar";
    }
    $vSessao = $_SESSION["logado"] ?? null;
    require("./views/header.view.php");

    if (isset($_SESSION) && $vSessao == "true") {
        if ($acao == 'cadastrotrabalho') {
            require('./views/cadastrotrabalho.view.php');
        } else if ($acao == 'listartrabalhos') {
            require('./views/trabalhos.view.php');
        } else {
            require('./views/trabalhos.view.php');
        }
    } else if ($acao == "cadastrar") {
        require('./views/cadastrousuario.view.php');
    } else if ($acao == "logar") {
        require('./views/login.view.php');
    }
