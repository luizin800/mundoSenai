<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'fichacadastro2';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// if($conexao->connect_errno)
// {
//   echo "Erro";  
// }
// else 
// {
//    echo "Conexao efetuada com sucesso";
// }



?>

<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];



$result = mysqli_query($conexao, "INSERT INTO usuarios(email,nome,telefone,idade)
VALUES ('$email','$nome','$telefone','$idade')");




}








?>