<?php
//realiza a conexão com mySql
$servidor = "localhost";
$usuario = "root";
$senha = "";
$conexao = mysqli_connect($servidor,$usuario,$senha);

//identifica a base de dados

$bancodedados = "chacara";

//conecta mySql e base de dados

$bd = mysqli_select_db($conexao,$bancodedados);
if (mysqli_connect_errno()){
    printf("Falha na conexão: %s \n", mysqli_connect_error());
    die();
}
?>