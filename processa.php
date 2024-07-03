<?php
session_start();
include("conexao.php");
$nome = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
// echo "nome: $nome <br>";
// echo "Email: $email";
$create_user = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome','$email', NOW())"; 
$created_user = mysqli_query($conn, $create_user);
if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'> Usuario cadastrado com sucesso<p/>";
    header("Location:cadastro.php");
}else{
    header("Location:cadastro.php");
}