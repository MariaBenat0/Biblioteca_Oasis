<?php

$identificacao= $_POST ['identificacao'];
$isbn= $_POST ['isbn'];

include "conexao.php";

$sql = "INSERT INTO `devolucao` (`ID_cliente` , `ISBN` )
        VALUES ('$identificacao' , '$isbn' )";
   
   if (mysqli_query ($con, $sql)) {
      echo "Devolução concluída com Sucesso!";
      echo "<br> <a href= 'index.html'> Voltar </a>" ;
   }

   else{
      echo "Erro no cadastro!";
   }