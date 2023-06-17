<!DOCTYPE html>
<html>

<head>
  <title>Chácara Paraiso D'Mata</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Raleway", Arial, Helvetica, sans-serif
    }

    .mySlides {
      display: none
    }
  </style>
</head>

<body class="w3-content w3-border-left w3-border-right">

  <!--Efeito de sobreposição ao abrir a barra lateral em telas pequenas-->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
    id="myOverlay"></div>

  <!-- !CONTEÚDO DA PÁGINA! -->
  <div class="w3-main w3-white" style="margin-left:60px">

    <!-- Empurre o conteúdo para baixo em telas pequenas -->
    <div class="w3-hide-large" style="margin-top:80px"></div>

    <!--Contato -->
    <div class="w3-container" id="contact">
      <h2> Confirmação de Reserva</h2>
      <i class="fa fa-calendar-check-o" style="width:30px"></i>Entrada:
      <?php print date("d/m/Y", strtotime($entrada)); ?><br>
      <i class="fa fa-calendar-o" style="width:30px"></i>Saída:
      <?php print date("d/m/Y", strtotime($saida)); ?><br>
      <i class="fa fa-male" style="width:30px"></i>Adultos:
      <?php print $adulto; ?><br>
      <i class="fa fa-child" style="width:30px"></i>Crianças:
      <?php print $crianca; ?><br>
      <form action="./confirmarReserva.php" method="post" target="_blank">
        <input type="hidden" name="entrada" value="<?php print $entrada; ?>" />
        <input type="hidden" name="saida" value="<?php print $saida; ?>" />
        <input type="hidden" name="adulto" value="<?php print $adulto; ?>" />
        <input type="hidden" name="crianca" value="<?php print $crianca; ?>" />
        <p><input class="w3-input w3-border" type="text" placeholder="Nome" required name="nome"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Telefone" required name="telefone"></p>
        <button type="submit" class="w3-button w3-green w3-third">Confirmar sua Reserva</button>
      </form>
    </div>
    <footer class="w3-container w3-padding-16" style="margin-top:32px"><a
        href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
        class="w3-hover-text-green"></a></footer>
    <!-- Conteúdo da página final -->
  </div>

  <!-- Subscrever modal -->
  <div id="subscribe" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-padding-large">
      <div class="w3-container w3-white w3-center">
        <i onclick="document.getElementById('subscribe').style.display='none'"
          class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
        <h2 class="w3-wide"> Se Inscreva</h2>
        <p>Para mais informações envie seu Email </p>
        <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
        <button type="button" class="w3-button w3-padding-large w3-green w3-margin-bottom"
          onclick="document.getElementById('subscribe').style.display='none'">Enviar</button>
      </div>
    </div>
  </div>

</body>
</html>