<?php

$nome_completo= $_POST ['nome_completo'];
$data_nascimento= $_POST ['data_nascimento'];
$cpf= $_POST ['cpf'];
$telefone= $_POST ['telefone'];
$endereco = $_POST ['endereco'];
$datadocadastro = $_POST ['datadocadastro'];

include "conexao.php";

$sql = "INSERT INTO `cliente` (`Nome` , `Data de Nascimento`, `CPF`, `Telefone`,  `Endereco`, `Data de Cadastro` )
        VALUES ('$nome_completo' , '$data_nascimento' , '$cpf', '$telefone' , '$endereco' , '$datadocadastro' )";
   
   if (mysqli_query($con, $sql)) { 
      echo "Cadastro Concluído com Sucesso!";
      echo "<br> <a href='index.html'> Voltar </a>";
  } else {
      echo "Erro no cadastro: " . mysqli_error($conexao); 
  }
  ?>