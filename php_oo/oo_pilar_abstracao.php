<?php

    //modelo
    class Funcionario{

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;


        //getters e setters (overload / sobrecarga)
         function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

         function __get($atributo){
            return $this->$atributo;
        }

        //métodos
        function resumirCadFunc() {
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s). E seu telefone é " . $this->__get('telefone');
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos; 
        } 

    }

        $y = new Funcionario(); 
        $y->__set('nome', 'Jose');
        $y->__set('telefone', '75 99999-8888'); 
        $y->__set('numFilhos', 2); 
        echo $y->resumirCadFunc();
        //echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s). E seu telefone é ' . $y->__get('telefone');

        echo '<br />';

        $x = new Funcionario(); 
        $x->__set('nome', 'Maria');
        $x->__set('telefone', '75 98888-7777'); 
        $x->__set('numFilhos', 0);
        echo $x->resumirCadFunc();
        //echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s). E seu telefone é ' . $x->__get('telefone');
     
        /*
        function setNome($nome){
            $this->nome = $nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }


        function getNome(){
            return $this->nome;
        }

        function getTelefone(){
            return $this->telefone;
        }
        
        function getNumFilhos(){
            return $this->numFilhos;
        }
        
    }

    $y = new Funcionario(); 
    $y->setNome('Jose');
    $y->setTelefone('75 99999-8888'); 
    $y->setNumFilhos(2); 
    //echo $y->resumirCadFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s). E seu telefone é ' . $y->getTelefone();

    echo '<br />';

    $x = new Funcionario(); 
    $x->setNome('Maria');
    $x->setTelefone('75 98888-7777'); 
    $x->setNumFilhos(0);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s). E seu telefone é ' . $x->getTelefone();
    */


    /*
    $y = new Funcionario(); //instancia de um objeto com base no modelo funcionario
    echo $y-> resumirCadFunc(); //exibindo o resumo a partir do metodo resumirCadFunc()

    $y->modificarNumFilhos(3); //modificando o numero de filhos

    echo '<br />';

    echo $y->resumirCadFunc(); //imprimindo o resumo atualizado

    echo '<hr />';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br />';
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();
    */


    ?>