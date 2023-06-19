<?php 
    //Verifica se há informação no submit
    if(isset($_POST['submit']) && !empty($_POST)){
        
        //Se sim, Acessa
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];

    //Verificando novamente se a informação está sendo recebida
    // print_r('Email: ' . $email);
    // echo '<br>';
    // print_r('Senha: ' . $senha);

    // Envia os dados ao BD
    $sql_insert = mysqli_query($conn, "INSERT INTO tab_login(email, senha, nome, sobrenome) VALUES ('$email', '$senha', '$nome', '$sobrenome')");
    }
