<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    Class Cliente extends Pessoa{
        protected string $email;
        protected string $senha;

        public function __construct(string $nome, string $email, string $telefone, string $senha)

        {
            parent::__construct($nome,$telefone);
            $this->email = $email;
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
                   "<br>E-mail: R$".$this->email.
                   "<br>Senha: ".$this->senha;
        }//Fim do método

    }//Fim da classe cliente




?>