<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $login = $_POST['login'];
                $senha = $_POST['passw'];
                if ($login == "teste@exemplo.com" && $senha == "123456") {
                    echo "<p style='color: green;'>Login realizado com sucesso!</p>";
                } else {
                    echo "<p style='color: red;'>E-mail/CPF ou senha inválidos.</p>";
                }
            }
            ?>