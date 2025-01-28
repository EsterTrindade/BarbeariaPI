<?php
    namespace PHP\Modelo;

    class Pessoa{
        protected string $nome;
        protected string $telefone;

        public function __construct(string $nome, string $telefone)
        {
            //Instanciar
            $this->nome = $nome;
            $this->telefone = $telefone;
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
                   "<br>Telefone: ".$this->telefone;
        }//Fim do Método

    }// Fim classe pessoa





?>