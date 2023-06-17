<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conecta.php";

    $entrada = $_POST["entrada"];
    $saida = $_POST["saida"];
    $adulto = $_POST["adulto"];
    $crianca = $_POST["crianca"];

    // faz a query no banco para ver se a data de entrada e saida desejada estão disponíveis
    $sql = "SELECT * FROM reserva WHERE (entrada <= '$entrada' AND saida >= '$entrada') OR (entrada <= '$saida' AND saida >= '$saida')";

    $rs = mysqli_query($conexao, $sql);
    $total_registros = mysqli_num_rows($rs);

    // se encontrar um registro, mostra que as datas não estão disponíveis
    if ($total_registros > 0) {
        echo "<br>Desculpe, as datas de entrada e saída selecionadas não estão disponíveis.";
        return;
    }else{
        // senão redireciona para o enviarReserva.php parar pegar os dados de contato e confirmar a reserva
        include 'enviarReserva.php';
    }
}
?>
