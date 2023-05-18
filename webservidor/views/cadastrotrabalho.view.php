<?php
    require ("./vendor/autoload.php");
    require_once("./views/header.view.php");
    if (!session_id()) {
        session_start();
    }    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web-Servidor</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de novo trabalho</h2>
        <div class="novotrabalho">
            <p class="tituloTrabalho" id="tituloTrabalho">TITULO</p>
            <p class="dataPublicacaoTrabalho" id="dataPublicacaoTrabalho">Publicado: ##/##/####</p>
            <p class="dataEntregaTrabalho" id="dataEntregaTrabalho">Data entrega: ##/##/####</p>
            <div id="containerdescricao">
                <p id="txtDescricaoCadastro"class="txtDescricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad fugit dolores quam numquam incidunt quod fugiat! Aliquid vero nam perspiciatis ducimus obcaecati, ipsam animi. Rem inventore repudiandae voluptatum ratione sit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad fugit dolores quam numquam incidunt quod fugiat! Aliquid vero nam perspiciatis ducimus obcaecati, ipsam animi. Rem inventore repudiandae voluptatum ratione sit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad fugit dolores quam numquam incidunt quod fugiat! Aliquid vero nam perspiciatis ducimus obcaecati, ipsam animi. Rem inventore repudiandae voluptatum ratione sit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad fugit dolores quam numquam incidunt quod fugiat! Aliquid vero nam perspiciatis ducimus obcaecati, ipsam animi. Rem inventore repudiandae voluptatum ratione sit.</p>
            </div>
            <!--<input type="button" id="btnDescricaoCadastro" class="btnDescricao" value="Ver mais.." onclick="verMaisDescricao()"></input>-->
            <p class="requisitosTrabalho" id="requisitosTrabalho">Requisitos:</p>
            <p class="valorPagamentoTrabalho" id="valorPagamentoTrabalho">Pagamento: R$ ##.###,##</p>
            <p class="autorTrabalho" id="autorTrabalho">Autor:</p>
        </div>
        <div id="formulariosnovotrabalho">
            <form action="./controller/trabalho.controller.php" method="post">
                <p id="indiceFormularios">Formulários:</p>
                <label id="tituloFormularios">Titulo: 
                    <input type="text" name="tituloFormularios" onchange="onChangeCadastro(this)">
                </label>
                <div id="descricaoFormularios">
                    <p>Descrição:</p>
                <textarea name="descricaoFormularios" cols="40" rows="10" onchange="onChangeCadastro(this)"></textarea>
                </div>
                <label id="requisitosFormularios">Requisitos:
                    <input type="text" name="requisitosFormularios" onchange="onChangeCadastro(this)">
                </label>
                <div id="valorPagamentoFormularios">
                    <p>Pagamento: </p>
                    <input type="text" name="valorPagamentoFormularios" onchange="onChangeCadastro(this)" onkeypress="return isNumberDuasCasas(event,this)">
                </div>
                <label id="dataEntregaFormularios">Data Entrega:
                    <input type="text" name="dataEntregaFormularios" onchange="onChangeCadastro(this)">
                </label>
                <input type="hidden" name="acao" value="cadastrar" style="position: relative;">
                
                <div id="enviarFormularios" style="position: relative; top: 50px;">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>