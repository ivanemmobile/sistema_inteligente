<?php

/*
Nesta Pagina será a principal com o nome cadastarcliente.php onde devemos colocar todos dados
incluindo nome; email; telefone;


iremos criar primeiro o banco de dados chamado BDclientes onde teremos os
seguintes campos: id (AI); nomeclientes(varchar); email(varchar); 
telefone;(varchar)
logo vamos criar uma pagina como cadastro.php e logo montamos as demais
areas
*/
include_once 'create.php';
?>

<!DOCTYPE html>
 <html>
   <head>
       <title>Stone_Place - Clientes</title>
       <!- Aqui fica o nome da pagina e os dados relevantes->
       <meta charset="UTF-8">
       <link rel="stylesheet" href="font.css">
       <!- Aqui fica o nome do CSS e como chamar ele para nossa pagina->
       
   </head>
   <body>
       <div class="main">
           <h2>Cadastrar de Clientes</h2>

           <form  class="insert" action="create.php" method="POST">
            <!- onde todas as informações serão incluida na pagina create.php->
            <h3>Nome do Cliente</h3>
            <input  class="i" name="nome"  id="nomecliente" placeholder="Nome completo" type="text">

            <h3>E-mail</h3>
            <input class="i" name="email" id="email" placeholder="Email do cliente" type="text">

            <h3>Telefone</h3>
            <input class="i" name="telefone" id="telefone"  placeholder="Telefone do cliemte" type="text"> <br>
            <!- vindo da pagina create.php os dados serão cadastrados por aqui->
            <button type="submit" class="btn" name="cadastrar">Adicionar Cliente</button>
            
            <a href="controle.php">
             <input class="btn" type="button" value="Listar Clientes">
            </a>
           </form>
      

       </div>
   </body>  
 </html>