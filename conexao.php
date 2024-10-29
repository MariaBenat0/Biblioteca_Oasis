<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "bd_bibliotecaoasis";

if ($con = mysqli_connect ($server, $user, $pass, $bd)){
   // echo "Conectado.";
}
else{
   echo "Erro.";
}