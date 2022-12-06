<?php
$dbhost = 'Localhost';
$dbUsername = 'root';
$dbpassword = '';
$dbName = 'cadastro-donopet';

$conexao = new mysqli($dbhost, $dbUsername, $dbpassword, $dbName);

//if ($conexao->connect_errno) {
//    echo "Erro";
//} else {
//    echo "Sucesso";
//}
