<?php
include_once('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$result = mysqli_query($conn, "INSERT INTO fale_conosco(nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')");
?>

