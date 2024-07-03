<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #3e403a;
    }
    form{
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        color: white;
        border-radius: 10px;
    }
    form input{
        padding: 5px;
    }

    h1{
        text-align: center;
        color: #fff;
        font-size: 24px;
        margin-bottom: 20px;
        margin-top: 20px;
        padding-bottom: 10px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
    }
</style>
<body>
    <h1>Cadastrar Usuario</h1>
    <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form action="processa.php" method="post">
        <label >Nome:</label>
        <input type="text" name="nome" placeholder="Nome completo" required><br><br>
        <label >E-mail:</label>
        <input type="email" name="email" placeholder="Digite um E-mail" required><br><br>
        <input type="submit" value="Cadastar">
    </form>
</body>
</html>