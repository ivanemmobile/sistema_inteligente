<?php
/*
conexao com banco de dados, 









*/
include_once 'db_connect.php';


if(isset($_POST['cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome'] );
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);

//inserindo os dados na base de dados
    $sql ="INSERT INTO cliente (nome, email, telefone) VALUES ('$nome' , '$email', '$telefone')";

//verificando se o camando eu certo
if(mysqli_query($connect, $sql)):
    echo "cadastrado com sucesso !";
    header('Location: ../cadastarcliente.php');
else:
    echo  "erro ao cadastrar ! ";
    header('Locatio: ../cadastarcliente.php');
endif;
endif;

?>