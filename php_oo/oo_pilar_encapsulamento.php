<?php

    class Pai {

        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';    
        
        /*
        public function getSobrenome(){
            return $this->sobrenome;
        }

        public function setSobrenome($value){
            
            if(strlen($value) >= 3){
                $this->sobrenome = $value;
            }
        }
        */

        
        //Utilizando metodos magicos
        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;   
        }
        

        private function executarMania(){
            echo 'Assobiar';   
        }

        protected function responder(){
            echo 'Oi';   
        }

        public function executarAcao(){
            $x = rand(1, 10);
            
            if($x >= 1 && $x <= 8){
                $this->responder();
            }else{
                $this->executarMania();
            }
        }

    }

    class Filho extends Pai {
        public function __construct(){
            //exibir os metodos do objeto
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        private function executarMania(){
            echo 'Cantar';   
        }

        protected function responder(){
            echo 'Olá';   
        }

        public function x(){
            $this->executarMania();   
        }

    }

     
    /*
    $pai = new Pai();
    echo $pai->getSobrenome();   
    $pai->setSobrenome('Junior');  
    echo '<br />'; 
    echo $pai->getSobrenome();   
    */

    //Utilizando os metodos magicos para acessar atributos como se fossem publicos
    /* 
    $pai = new Pai();   
    echo $pai->sobrenome;   
    $pai->sobrenome = 'Junior';  
    echo '<br />'; 
    echo $pai->sobrenome;
    */

    //$pai = new Pai();
    //echo $pai->executarAcao();

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    $filho->executarAcao();
    echo '<br />';
    $filho->x();




    ?>