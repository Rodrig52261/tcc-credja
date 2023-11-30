<?php

    if(!empty($_GET['id_clientes']))
    {
        
    include_once('conexao.php');

    $id_clientes = $_GET['id_clientes'];

    $sqlSelect = "SELECT * FROM clientes WHERE id_clientes=$id_clientes";

    $result = $conexao->query($sqlSelect);

     if($result->num_rows > 0)
     {
        
        $sqlDelete = "DELETE FROM clientes WHERE id_clientes=$id_clientes";
        $resultDelete = $conexao->query($sqlDelete);
        
     }
         header('Location: ../paginas/controle_clientes.php');
    }
    
?>