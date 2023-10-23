<?php 

/*
Configuração da conexao com o banco de dados

*/
$username = "root";
$servername = "localhost";
$password = "";
$db_name = "bdclientes";

$connect = mysqli_connect($servername, $username, $password, $db_name);

