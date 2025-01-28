<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class inserir{
        function cadastrarCliente(Conexao $conexao, string $nome, string $email, string $telefone, string $senha)
        {
            try{
                $conn = $conexao->conectar();//Abrir banco de dados.
                $sql = "insert into cliente(codigo, nome, telefone, senha)
                values('$email', '$nome', '$telefone', '$senha')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }

        }//Fim do método
        

    }//Fim classe inserir



?>