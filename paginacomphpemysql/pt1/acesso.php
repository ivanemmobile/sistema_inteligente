<!DOCTYPE html>
<html>
<head>

<?php
    // Conectando ao banco de dados

    $sql = "SELECT * FROM `tcstoneplace_ps`;";

    $sql = "CREATE TABLE tcstoneplace_ps(\n"

    . "    codigo INT AUTO_INCREMENT PRIMARY KEY,\n"

    . "    cliente varchar(90),\n"

    . "    email varchar (128),\n"

    try {
        $conn = new PDO("mysql:host=localhost;stoneplace_ps", "root", "");
        // Configurando o PDO para gerar exceções em caso de erro
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Não foi possivel acessar o cadastro no MySQL !" . $e->getMessage();
    }
?>

<!-http://localhost/github_/acesso.php ->
    <title>Cadastro PHP com MySQL</title>
    <style>
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0px 0px 10px #000;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Stone Place - Proz Sacomã </h1>
        <!- Nome da pagina com banco de dados, cadastro_cliente.php ->
        <form action="cadastro_cliente.php" method="post">
            <div class="form-group">
                <label for="nome">Cliente:</label>
                <input type="text" name="cliente" id="cliente" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="contato">Telefone:</label>
                <input type="tel" name="contato" id="contato" required>
            </div>
            <input type="submit" value="Adicionar" class="btn">
       
