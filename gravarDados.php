<?php

/* FORM DATA One./index.html */ 
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

/* FORM DATA Two ./index.hmtl */
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

/* CONNECION DATA */
$servername = "localhost";
$database = "formulario";
$username = "root";
$password = "";

/* Create connection */
$connection = mysqli_connect($servername, $username, $password, $database);

/* Check connection */
if (!$connection) {
      die("A conexão falhou! " . mysqli_connect_error());
}
 
/* Database Recording One*/
$record = "INSERT INTO envios(nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";
if (mysqli_query($connection, $record)) {
      echo "Gravado com Sucesso no Banco de Dados Envios!";
} else {
      echo "Error: " . $record . "<br>" . mysqli_error($connection);
}

/* Database Recording Two*/
$recordTwo = "INSERT INTO registros(endereco, cidade, estado) VALUES ('$endereco', '$cidade', '$estado')";
if (mysqli_query($connection, $recordTwo)) {
      echo "Gravado com Sucesso no Banco de Dados Registros!";
} else {
      echo "Error: " . $recordTwo . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);


?>
