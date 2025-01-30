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
        <link rel="stylesheet" href="../CSS/estilo.css">
        <link rel="icon" href="../img/logofundo.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>

    <body>

        <nav>
            <div class="logoNav">
                <a href="../index.html"><img src="../img/logofundo.png" alt="Neguinho Corts Logo"></a>
            </div>
            <div class="listNav">
                <ul>
                    <li><a href="../Telas/LoginCliente.php" class="menuNav">LOGIN</a></li>
                </ul>
            </div>
        </nav>

        <br><br><br><br><br>
        <h1>REALIZE SEU CADASTRO</h1>
        <h6>Já possui um cadastro? <a href="../Telas/LoginCliente.php">Clique Aqui.</a></h6>
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
                <input type="tel" class="form-control" id="tTelefone" name="tTelefone" placeholder="(99) 99999-9999">
            </div>

            <div class="mb-3">
                <label for="lData" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="tData" name="tData">
            </div>

            <div class="mb-3">
                <label for="lSenha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="tSenha" name="tSenha" placeholder="Insira uma senha">
            </div>

            <button type="submit" class="btncadastro">Cadastrar
                <?php
                    $conexao = new Conexao(); //Conectar no Banco.
                    if(isset($_POST['tNome']) && isset($_POST['tEmail']) && isset($_POST['tTelefone']) && isset($_POST['tData']) && isset($_POST['tSenha'])){
                        $nome = $_POST['tNome'];
                        $email = $_POST['tEmail'];
                        $telefone = $_POST['tTelefone'];
                        $dataNasc = $_POST['tData'];
                        $senha = $_POST['tSenha'];

                    //Instanciar
                    $inserir = new Inserir();
                    echo $inserir->cadastrarCliente($conexao, $nome, $email, $telefone, $dataNasc, $senha);

                    };
                ?>
            </button>
        </form>

        <br>

        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-logo">
                        <img src="../img/logofundo.png" alt="Neguinho Corts Logo">
                    </div>
                    <div class="footer-links">
                        <ul>
                            <li><a href="#equipe">Equipe</a></li>
                            <li><a href="#nossosCortes">Serviços</a></li>
                            <li><a href="#about">Sobre</a></li>
                            <li><a href="#unidades">Unidades</a></li>
                        </ul>
                    </div>
                    <div class="footer-social">
                    
                        <a href="https://www.instagram.com/neguinhocorts_/#" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    
                        <a href="https://w.app/nRWpYI" aria-label="WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2024 Neguinho Corts. Todos os direitos reservados.</p>
                </div>
            </div>
        </footer>

    </body>
</html>

