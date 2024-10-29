<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$data = $_POST['data'];
$estoque = $_POST['estoque'];
$categoria = $_POST['categoria'];
$status = $_POST['status'];

include "conexao.php";

$sql = "INSERT INTO `livro` (`Titulo`, `Autor`, `Editora`, `Data de publicacao`, `Estoque`, `Categoria`, `Status`) 
        VALUES ('$titulo', '$autor', '$editora', '$data', '$estoque', '$categoria', '$status')";

if (mysqli_query($con, $sql)) { 
    echo "Registro Concluído com Sucesso!";
    echo "<br> <a href='index.html'> Voltar </a>";
} else {
    echo "Erro no cadastro: " . mysqli_error($conexao); 
}
?>
