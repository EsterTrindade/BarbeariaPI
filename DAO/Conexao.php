<?php
    namespace PHP\Modelo\DAO;
    
    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'barbeariaBD');

                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Ops!.. Algo deu errado!";
            }catch(Except $erro)
            {
                return "Algo deu errado! <br><br>".$erro;
            }
        }//Fim do conectar

    }//Fim da classe




?>