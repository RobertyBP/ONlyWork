<?php    
    require ("../vendor/autoload.php");
    if(isset($_POST['acao'])){
        if($_POST['acao'] == 'cadastrar'){
            /*$novousuario = new Usuario($_POST['nomelogin'], $_POST['emaillogin'], $_POST['senhalogin'], 'cadastrar');
            $novousuario->cadastrar();  */
            if((strlen($_POST['nomelogin']) > 7) && (strlen($_POST['emaillogin']) > 7) && (strlen($_POST['senhalogin']) > 7)){
                $novousuario = new Usuario($_POST['nomelogin'], $_POST['emaillogin'], $_POST['senhalogin'], 'cadastrar');
                $novousuario->cadastrar();
            }else{
                alerta();
            }    
        }else if($_POST['acao'] == 'logar'){
            $novousuario = new Usuario(' ', $_POST['emaillogin'], $_POST['senhalogin'], 'logar');
            $novousuario->logar(); 
        }
    }

    function alerta(){
        echo "<script type='text/javascript'> 
                alert('Preencha todos os campos corretamente!');
                window.location.replace('../index.php?acao=cadastrar');
            </script>";
    }
    
?>
