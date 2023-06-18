<?php
include_once('conexao.php');

$sql = "SELECT * FROM fale_conosco ORDER BY 1";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>

<body>
    <h1>Acessou o sistema</h1>
    <div class="m-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($user_data = mysqli_fetch_assoc($result))
                    {                        
                        echo "<trd>";                        
                        echo "<td>" . $user_data['nome'] . "</td>";
                        echo "<td>" . $user_data['email'] . "</td>";
                        echo "<td>" . $user_data['assunto'] . "</td>";
                        echo "<td>" . $user_data['mensagem'] . "</td>";
                        echo "</trd>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>