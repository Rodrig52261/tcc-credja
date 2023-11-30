<?php 

    include_once('conexao.php');

    if(isset($_POST['update']))
    {
        $id_clientes = $_POST['id_clientes'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $emprestimo = $_POST['emprestimo'];

        $sqlUpdate = "UPDATE clientes SET nome='$nome', email='$email', celular='$celular', emprestimo='$emprestimo' WHERE id_clientes='$id_clientes'";

        $result = $conexao->query($sqlUpdate);
        

    }

    header('Location: ../paginas/controle_clientes.php');

?>