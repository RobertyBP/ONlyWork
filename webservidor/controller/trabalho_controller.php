<?php    
    require('../models/trabalho.php');
    if(isset($_POST['acao'])){
        if($_POST['acao'] == 'cadastrar'){
            if((strlen($_POST["tituloFormularios"]) > 0) && (strlen($_POST["descricaoFormularios"]) > 0) && (strlen($_POST["dataEntregaFormularios"]) > 0) && (strlen($_POST["requisitosFormularios"]) > 0) && (strlen($_POST["valorPagamentoFormularios"]) > 0)){
                $novotrabalho = new Trabalho($_POST["tituloFormularios"], $_POST["descricaoFormularios"], date('d-m-Y'), $_POST["dataEntregaFormularios"], $_POST["requisitosFormularios"], $_POST["valorPagamentoFormularios"], 'Aguardando', $_SESSION['usuario']);
                $novotrabalho->cadastrar();  
            }
            else{
                alerta();
            }              
        }
    }    

    function alerta(){
        echo "<script type='text/javascript'> 
                alert('Preencha todos os campos!');
                window.location.replace('../index.php');
            </script>";
    } 
?>
