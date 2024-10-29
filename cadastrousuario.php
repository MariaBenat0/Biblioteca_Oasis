<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $datanascimento = $_POST['datanascimento'];
    $cargo = $_POST['cargo'];

    include "conexao.php";
    
    $sql = "INSERT INTO `usuarios` (`Nome` , `Data de Nascimento`, `CPF`, `Telefone`, `Endereco`,  `Email`, `Cargo`)
            VALUES ('$nome' , '$datanascimento' , '$cpf', '$telefone' , '$endereco' , '$email' , '$cargo' )";
       
       if (mysqli_query ($con, $sql)) {
          echo "Usuário Cadastrado com Sucesso!";
          echo "<br> <a href= 'index.html'> Voltar </a>" ;
       }
    
       else{
          echo "Erro no cadastro!";
       } 
}
?>
