<?php
    require_once('./models/conexao.php');
    $arrayTrabalhos = array();
    $h2trabalhos;
    $i = 0;
    $bd = Conexao::get();
    $query = $bd->prepare("SELECT * FROM trabalhos");
    $query->execute();   
    while($trabalho = $query->fetch()){
        $arrayTrabalhos[$i] = array(
            'titulo' => $trabalho['titulo'],
            'descricao' => $trabalho['descricao'],
            'datapublicacao' => $trabalho['datapublicacao'],
            'dataentrega' => $trabalho['dataentrega'],
            'requisitos' => $trabalho['requisitos'],
            'pagamento' => $trabalho['pagamento'],
            'status' => $trabalho['statusT'],
            'autor' => $trabalho['autor'],
        );
        $i++;
    }
    if(count($arrayTrabalhos) > 0){
        $h2trabalhos = "Trabalhos disponíveis";
    }else{
        $h2trabalhos = "Nenhum trabalho cadastrado!";
    }
        
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web-Servidor</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<div class="container" id="containerlistatrabalhos">
        <h2><?=$h2trabalhos; ?></h2>
        <div id="containercards">
            <?php 
                foreach ($arrayTrabalhos as $trabalhos){
            ?>
            <div class="novotrabalho" style="margin: 0; margin-bottom: 5px;">
                <p class="tituloTrabalho" id="tituloTrabalho"><?= $trabalhos['titulo']; ?></p>
                <p class="dataPublicacaoTrabalho" id="dataPublicacaoTrabalho">Publicado: <?= $trabalhos['datapublicacao']; ?></p>
                <p class="dataEntregaTrabalho" id="dataEntregaTrabalho">Data entrega: <?= $trabalhos['dataentrega']; ?></p>
                <div id="containerdescricao">
                    <p id="txtDescricaoCadastro"class="txtDescricao"><?= $trabalhos['descricao']; ?></p>
                </div>
                <!--<input type="button" id="btnDescricaoCadastro" class="btnDescricao" value="Ver mais.." onclick="verMaisDescricao()"></input>-->
                <p class="requisitosTrabalho" id="requisitosTrabalho">Requisitos: <?=$trabalhos['requisitos'];?></p>
                <p class="valorPagamentoTrabalho" id="valorPagamentoTrabalho">Pagamento: R$ <?=$trabalhos['pagamento'];?></p>
                <p class="autorTrabalho" id="autorTrabalho">Autor: <?=$trabalhos['autor'];?></p>
                <div id="candidatarse">
                    <button>Enviar proposta</button>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <p style="float: right; position: relative; top: -620px; font-weight: bold; left: -350px;">Trabalhos cadastrados: <?=$i; ?></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
