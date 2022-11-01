<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'fichacadastro2';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro";
} else {
    echo "Conexao efetuada com sucesso";
}

?>