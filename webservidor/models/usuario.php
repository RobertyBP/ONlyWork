<?php
    session_start();
    require("conexao.php");
    class Usuario {
        private $nome;
        private $email;
        private $hc;

        public function __construct($nome, $email, $senha, $op){
            $this->nome = $nome;
            $this->email = $email;
            if($op == 'cadastrar'){
                $this->hc = password_hash($senha, PASSWORD_DEFAULT);
            }else if ($op == 'logar'){
                $this->hc = $senha;
            }
            
        }
        
        public function cadastrar(){
            $bd = Conexao::get();
            $query = $bd->prepare("select * from usuario where email = :email");
            $query->bindParam(':email', $this->email);
            $query->execute();
            $usuario = $query->fetch() ?? null;
            if($usuario == null){
                $query = $bd->prepare("INSERT INTO usuario(nome, email, hashc) VALUES(:nome, :email, :hashc)");
                $query->bindParam(':nome', $this->nome);
                $query->bindParam(':email', $this->email);
                $query->bindParam(':hashc', $this->hc);
                $query->execute();
                $_SESSION['logado'] = 'true';
                $_SESSION['usuario'] = $this->nome;
                header("location: ../index.php");
            }else if($usuario != null){
                alertaEmail();
            }
            //header("location: ../index.php");
        }

        public function logar(){
            $bd = Conexao::get();
            $query = $bd->prepare("select * from usuario where email = :email");
            $query->bindParam(':email', $this->email);
            $query->execute();
            $usuario = $query->fetch() ?? null;
            if($usuario == null){
                alertaEmailIncorreto();
            }else if($usuario != null){
                if($usuario[2] == $this->email && password_verify($this->hc, $usuario[3])){ 
                    $_SESSION['logado'] = 'true';
                    $_SESSION['usuario'] = $usuario[1];
                    header("location: ../index.php");
                }else{
                    alertaSenhaIncorreta();
                }
                
            }

        }       
        
    
    }

    function alertaEmail(){
        echo "<script type='text/javascript'> 
                alert('Email informado já está em uso!');
                window.location.replace('../index.php?acao=cadastrar');
            </script>";
    }

    function alertaSenhaIncorreta(){
        echo "<script type='text/javascript'> 
                alert('Senha Incorreta!');
                window.location.replace('../index.php?acao=logar');
            </script>";
    }

    function alertaEmailIncorreto(){
        echo "<script type='text/javascript'> 
                alert('Email não existe na base de dados!');
                window.location.replace('../index.php?acao=logar');
            </script>";}

?>