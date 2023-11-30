<?php

    if(isset($_POST['submit']))
    {
        
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $emprestimo = $_POST['emprestimo'];

    $result = mysqli_query($conexao, "INSERT INTO clientes(nome, email, celular, emprestimo) 
    VALUES ('$nome','$email','$celular','$emprestimo')");
        
    header('Location: ../index.php');    

    }
?>