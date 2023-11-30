<?php

    if(!empty($_GET['id_clientes']))
    {
        
    include_once('conexao.php');

    $id_clientes = $_GET['id_clientes'];

    $sqlSelect = "SELECT * FROM clientes WHERE id_clientes=$id_clientes";

    $result = $conexao->query($sqlSelect);

     if($result->num_rows > 0)
     {
        while($user_data = mysqli_fetch_assoc($result))
        {
             $nome = $user_data['nome'];
             $email = $user_data['email'];
             $celular = $user_data['celular'];
             $emprestimo = $user_data['emprestimo'];
        }
        
     }
     else
     {
         header('Location: ../paginas/controle_clientes.php');
     }
    }
    else
    {
        header('Location: ../paginas/controle_clientes.php');
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Editar</title>
</head>
<body>

            <div class="conteudo">
                <form action="saveEdit.php" method="POST" class="form-edit">
                <div>
                    <h1>Editar Informações Do Cliente</h1>
                </div>
                    <input type="text" name="nome" placeholder="Nome Completo" value="<?php echo $nome ?>" required>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $email ?>" required>
                    <input type="tel" name="celular" placeholder="Celular" value="<?php echo $celular ?>" required>
                    <select name="emprestimo" id="" value="<?php echo $emprestimo ?>" required>
                        <option disabled selected>Escolha o tipo de empréstimo</option>
                        <option value="credito consginado" id="Crédito consignado">Crédito consignado</option>
                        <option value="financiamento" id="financiamento">Financiamento</option>
                        <option value="refinanciamento" id="refinanciamento">Refinanciamento</option>
                        <option value="saque aniversario" id="saque aniversario">Saque aniversario</option>
                    </select>
                    <div>
                  <?php   ?>
                        <input type="hidden" name="id_clientes" value="<?php echo $id_clientes ?>">
                        <input class="inputSubmit" type="submit" name="update" id="update" value="editar"></input>
                    </div>
                </form>  
            </div>

</body>
</html>