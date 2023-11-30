<?php 

    session_start();
    include_once('conexao.php');

        if(isset($_POST['usuario']) || isset($_POST['senha'])) {

        if(strlen($_POST['usuario']) == 0) {
            echo "Preencha seu login";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        }

        $usuario = $conexao->real_escape_string($_POST['usuario']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM adm WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL:" . $conexao->error); 

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();    

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['name'] = $usuario['name'];
            $_SESSION['id'] = $usuario['id'];

            header("location: ../paginas/controle_clientes.php");

        }
        else{

            echo "Falha ao logar! Usuario ou senha incorretos";

        }

    }

?>