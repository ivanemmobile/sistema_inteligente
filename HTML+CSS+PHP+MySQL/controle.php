<?php
/*
Esta Pagina consiste em realizar o controle dos clientes incluidos;

Iremos criar primeiro o banco de dados chamado BDclientes onde teremos os
seguintes campos: id (AI); nomeclientes(varchar); email(varchar); 
telefone;(varchar)
logo vamos criar uma pagina como cadastro.php e logo montamos as demais
areas
*/
include_once 'db_connect.php'; //importação de todas as variaveis da pagina db_connect.php;
?>

<!DOCTYPE html>
 <html>
   <head>
       <title>stone_place - Clientes</title>
    <!- Aqui fica o nome da pagina e os dados relevantes->

       <meta charset="UTF-8">
       <link rel="stylesheet" href="font.css">
    <!- Aqui fica o nome do CSS e como chamar ele para nossa pagina->
   </head>
   <body>
    <!- Aqui começa a area que ira mostrar todos os clientes ->
       <div class="main">
           <h2>Lista de Clientes</h2>
           <table class="tabela">
               <thead>
               <th>Nome: </th>
               <th>Email:</th>
               <th>Telefone:</th>
                </thead>
                <tbody>
<?php
$sql = "SELECT * FROM  cliente";
//o nome da tabela sempre estara aqui, no caso sera a tabela cliente dentro de bdclientes
$resultado = mysqli_query($connect, $sql);
// neste comando recebe da variaveis e exebir em lista;
while($dados = mysqli_fetch_array($resultado)):
//quando os dados ficam armazenado em um array, seguindo das linhas 44 até 52
?>
                <tr>
                <!- seguindo das linhas 44 até 52, referente as linhas 41 ->    
                    <td><?php echo $dados['nomecliente']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['telefone'];?></td>
                    <td><img src="icodelete.png" alt=""> <img src="icoedit.png" alt=""></td>
                </tr>
                <?php  
                endwhile;
                ?>
                <!- seguindo das linhas 44 até 52, referente as linhas 41 ->
                </tbody>
           </table>
           <a href="cadastarcliente.php">
           <!- colocar uma informação ->
            <input class="btn" type="button" value="Cadastar Clientes">
           </a>
       </div>
   </body>  
 </html>