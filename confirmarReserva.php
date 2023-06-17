<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conecta.php";

    $entrada = $_POST["entrada"];
    $saida = $_POST["saida"];
    $adulto = $_POST["adulto"];
    $crianca = $_POST["crianca"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $sql = "INSERT INTO reserva (entrada, saida, adulto, crianca, nome, email, telefone) VALUES ('$entrada', '$saida', '$adulto', '$crianca', '$nome','$email','$telefone')";

    $rs = mysqli_query($conexao, $sql);
    if (!$rs) {
        echo $sql;
        echo 'Problema na gravação';
        echo '<meta http-equiv="refresh" content="10";URL=index.php/>';
        return;
    }
    mysqli_close($conexao);

    echo "<br> Parabéns sua reserva foi confirmada com sucesso!";
}
?>