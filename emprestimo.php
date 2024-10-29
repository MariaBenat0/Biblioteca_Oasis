<?php

$cliente= $_POST ['cliente'];
$isbn= $_POST ['isbn'];
$data_emprestimo= $_POST ['data_emprestimo'];
$data_devolucao_prevista = $_POST ['data_devolucao_prevista'];
$status = $_POST ['status'];

include "conexao.php";

$sql = "INSERT INTO `emprestimo` (`ID_cliente` , `ISBN`, `Data do Emprestimo`, `Data de Devolucao Prevista` ,  `Status do Emprestimo` )
        VALUES ('$cliente' , '$isbn' , '$data_emprestimo', '$data_devolucao_prevista', '$status' )";
   
   if (mysqli_query ($con , $sql)) {
      echo "Empréstimo Concluído com Sucesso!";
      echo "<br> <a href= 'index.html'> Voltar </a>" ;
   }

   else{
      echo "Erro no cadastro!";
   }