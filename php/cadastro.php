<?php
//Verifica se há informação no submit
if (isset($_POST['cadastrar']) && !empty($_POST)) {
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $result = mysqli_query(
        $conn,
        "INSERT INTO tab_login(email, senha, nome, sobrenome) VALUES ('$email', '$senha', '$nome', '$sobrenome')"
    );
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Página de Cadastro</title>

</head>

<body>
    <div class="container">
        <div class="form">
            <form action="cadastro.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Login</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Primeiro Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="sobrenome">Sobrenome</label>
                        <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                </div>

                <div class="continue-button">
                    <input id="inputSubmit" type="submit" name="cadastrar" value="Cadastrar"></input>
                    <button><a href="../html/index.html">Voltar para a página inicial</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>