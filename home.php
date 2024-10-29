<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (isset($_POST['cadastro_usuario'])) {
           echo "<p>Você escolheu fazer cadastro de usuário.</p>";
       }

       if (isset($_POST['login_usuario'])) {
           echo "<p>Você escolheu fazer login.</p>";
       }

       if (isset($_POST['fazer_emprestimo'])) {
           echo "<p>Você escolheu fazer um empréstimo.</p>";
       }

       if (isset($_POST['fazer_devolucao'])) {
           echo "<p>Você escolheu fazer uma devolução.</p>";
       }

       if (isset($_POST['registrar_livro'])) {
           echo "<p>Você escolheu registrar um livro.</p>";
       }

       if (isset($_POST['cadastro_cliente'])) {
           echo "<p>Você escolheu fazer cadastro de cliente.</p>";
       }
   }
   ?>