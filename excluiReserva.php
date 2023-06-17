<?php
$txtConteudo = filter_input_array(INPUT_GET,FILTER_DEFAULT);

if (isset($txtConteudo["id"])){
    $varId = $txtConteudo["id"];
    include "conecta.php";

    $sql = "DELETE FROM reserva ";
    $sql = $sql." WHERE id = '".$varId."' ";
 

    $rs = mysqli_query($conexao,$sql);
    if ($rs){
        print "dados excluidos com sucesso!!";
    }else{
        print "Exclusão não executado!!";
    }
    mysqli_close($conexao);
    print "<meta http-equiv='refresh' content='2; URL=consultaReservas.php'>";
}else{
    print "Exclusão não executada, verifique!!";
}
?>