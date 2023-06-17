<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conecta.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO contato (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    $rs = mysqli_query($conexao, $sql);
    if (!$rs) {
        echo $sql;
        echo 'Problema na gravação';
        echo '<meta http-equiv="refresh" content="10";URL=index.php/>';
        return;
    }
    mysqli_close($conexao);

    echo "<br> Mensagem recebida com sucesso!";
}
?>