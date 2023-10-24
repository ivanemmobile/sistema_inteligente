<?php 
/*
Configuração da conexao com o banco de dados onde sera definido o nome do servidor, banco de 
dados e tabela com os itens por colunas.
*/
$username = "root"; //definição do usuario.
$servername = "localhost"; //local de acesso.
$password = ""; //definição de senha, vazia.
$db_name = "loginin"; //definição de banco de dados.
//$db_name = "bdclientes"; será subistituido por logiin

//sendo necessario nas demais paginas esse comando conecta as validações de dados do MySQL
$connect = mysqli_connect($servername, $username, $password, $db_name);

