<?php 

/*
Configuração da conexao com o banco de dados

*/
$username = "root";
$servername = "localhost";
$password = "";
$db_name = "loginin";
//$db_name = "bdclientes"; será subistituido por logiin

$connect = mysqli_connect($servername, $username, $password, $db_name);

