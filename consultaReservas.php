<?php
include "conecta.php";

$sql = "SELECT * FROM reserva";
$rs = mysqli_query($conexao, $sql);
$total_registros = mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Tabela de Reservas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script>
     function excluirReserva(id,nome){
        var resposta = confirm(" deseja remover reserva de "+nome+"?");
        if (resposta == true){
            window.location.href = "excluiReserva.php?+id="+id;
        }
    }
  </script>
</head>

<body>
  <div class="container">
    <h1>Tabela de Reservas</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Entrada</th>
          <th>Saída</th>
          <th>Adulto</th>
          <th>Criança</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Ações</
        </tr>
      </thead>
      <tbody>
        <?php
        while ($reg = mysqli_fetch_array($rs)) {
          $id = $reg["id"];
          $entrada = $reg["entrada"];
          $saida = $reg["saida"];
          $adulto = $reg["adulto"];
          $crianca = $reg["crianca"];
          $nome = $reg["nome"];
          $email = $reg["email"];
          $telefone = $reg["telefone"];
          ?>
          <tr>
            <td><?php print $entrada; ?></td>
            <td><?php print $saida; ?></td>
            <td><?php print $adulto; ?></td>
            <td><?php print $crianca; ?></td>
            <td><?php print $nome; ?></td>
            <td><?php print $email; ?></td>
            <td><?php print $telefone; ?></td>
            <td>
              <button class="btn btn-danger" onclick="excluirReserva(<?php print $id; ?>,'<?php print $nome; ?>')">Excluir</button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>