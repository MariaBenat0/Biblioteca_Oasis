<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Consulta de Livros</title>
   <link rel="stylesheet" href="consulta.css">
   <link rel="icon" href="livros.png">
</head>
<body>
   <h1>Consulta de Livros</h1>

   <table style="border: 1px solid black">
      <tr>
         <th>ISBN</th>
         <th>Título</th>
         <th>Autor</th>
         <th>Editpra</th>
         <th>Data de Publicação</th>
         <th>Estoque</th>
         <th>Categoria</th>
         <th>Status</th>
      </tr>

      <tbody>
         <?php
         include "conexao.php";

         $sql = "SELECT * FROM livro";
         $dados = mysqli_query($con, $sql);

         while ($linha = mysqli_fetch_array($dados)) {
            $isbn = $linha['ISBN'];
            $titulo = $linha['Titulo'];
            $autor = $linha['Autor'];
            $editora = $linha['Editora'];
            $data_de_publicacao = $linha['Data de publicacao'];
            $estoque = $linha['Estoque'];
            $categoria = $linha['Categoria'];
            $status = $linha['Status'];

            echo "<tr>
                      <td>$isbn</td>
                      <td>$titulo</td>
                      <td>$autor</td>
                      <td>$editora</td>
                      <td>$data_de_publicacao</td>
                      <td>$estoque</td>
                      <td>$categoria</td>
                      <td>$status</td>
                  </tr>";
         }
         ?>
      </tbody>
   </table>

   <br>
   <a href="index.html">Voltar</a>
</body>
</html>
