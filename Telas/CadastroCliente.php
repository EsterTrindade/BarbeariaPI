<?php

    namespace PHP\Modelo;
    require_once('..\Cliente.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;

?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Cliente</title>
        <link rel="stylesheet" href="../CSS/pgcadastro.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>

    <body>
        <h1>REALIZE SEU CADASTRO</h1>
        <br>

        <form method="POST">
            <div class="mb-3">
                <label for="lNome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Digite seu nome">
            </div>

            <div class="mb-3">
                <label for="lEmail" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="tEmail" name="tEmail" placeholder="example@gmail.com">
            </div>

            <div class="mb-3">
                <label for="lTelefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="tTelefone" name="tTelefone" placeholder="(99) 99999-9999">
            </div>

            <div class="mb-3">
                <label for="lSenha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="tSenha" name="tSenha" placeholder="Insira uma senha">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar
                <?php
                    $conexao = new Conexao(); //Conectar no Banco.
                    if(isset($_POST['tNome']) && isset($_POST['tEmail']) && isset($_POST['tTelefone']) && isset($_POST['tSenha'])){
                        $nome = $_POST['tNome'];
                        $email = $_POST['tEmail'];
                        $telefone = $_POST['tTelefone'];
                        $senha = $_POST['tSenha'];

                    //Instanciar
                    $inserir = new Inserir();
                    echo $inserir->cadastrarCliente($conexao, $nome, $email, $telefone, $senha);

                    };
                ?>
            </button>

            
        </form>

        <br>

        <button type="button" class="btn btn-primary">Consultar</button>

        <button type="button" class="btn btn-primary">Atualizar</button>

        <button type="button" class="btn btn-danger">Excluir</button>
            
       
    </body>
</html>

