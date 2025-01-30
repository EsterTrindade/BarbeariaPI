<?php
    namespace PHP\Modelo;

    class Pessoa{
        protected string $nome;
        protected string $email;

        public function __construct(string $nome, string $email)
        {
            //Instanciar
            $this->nome = $nome;
            $this->email = $email;
        }// Fim do construtor (que serve para instanciar as variaveis)

        public function __get(string $variavel):mixed
        {
            return $this->variavel;
        }//Fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//Fim do Set

        public function imprimir():string
        {
            return "<br>Nome: ".$this->nome.
                   "<br>E-mail: ".$this->email;
        }//Fim do Método

    }// Fim classe pessoa





?>