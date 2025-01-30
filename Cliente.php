<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    Class Cliente extends Pessoa{
        protected int $telefone;
        protected date $dataNasc;
        protected string $senha;


        public function __construct(string $nome, string $email, int $telefone, string $dataNasc, string $senha)

        {
            parent::__construct($nome,$email);
            $this->dataNasc = $dataNasc;
            $this->telefone = $telefone;
            $this->senha = $senha;
        }

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
            return parent::imprimir().
                   "<br>Telefone: R$".$this->telefone.
                   "<br>Senha: ".$this->senha.
                   "<br>Data Nascimento:".$this->dataNasc;
        }//Fim do método

    }//Fim da classe cliente




?>