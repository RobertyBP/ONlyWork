<?php
    require ("../vendor/autoload.php");
    if (!session_id()) {
        session_start();
    }
    class Trabalho {
        private $titulo;
        private $descricao;
        private $datapublicacao;
        private $dataentrega;
        private $requisitos;
        private $pagamento;
        private $statusT;
        private $autor;
       
        public function __construct($titulo, $descricao, $datapublicacao, $dataentrega, $requisitos, $pagamento, $statusT, $autor){
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->datapublicacao = $datapublicacao;
            $this->dataentrega = $dataentrega;
            $this->requisitos = $requisitos;
            $this->pagamento = $pagamento;
            $this->statusT = $statusT;
            $this->autor = $autor;
        }
    
        public function cadastrar(){
            $bd = Conexao::get();
            $query = $bd->prepare("INSERT INTO trabalhos(titulo, descricao, datapublicacao, dataentrega, requisitos, 
            pagamento, statusT, autor) VALUES(:titulo, :descricao, :datapublicacao, :dataentrega, :requisitos, :pagamento, :statusT, :autor)");
            $query->bindParam(':titulo', $this->titulo);
            $query->bindParam(':descricao', $this->descricao);
            $query->bindParam(':datapublicacao', $this->datapublicacao);
            $query->bindParam(':dataentrega', $this->dataentrega);
            $query->bindParam(':requisitos', $this->requisitos);
            $query->bindParam(':pagamento', $this->pagamento);
            $query->bindParam(':statusT', $this->statusT);
            $query->bindParam(':autor', $this->autor);
            $query->execute();
            alertaCadastro();
        }

    }
    function alertaCadastro(){
        echo "<script type='text/javascript'> 
                alert('Cadastro efetuado com sucesso!');
                window.location.replace('../index.php');
            </script>";
    }
    
    

?>