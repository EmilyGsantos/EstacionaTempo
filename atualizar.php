<?php
 //Atualizar Usuario //
 include_once('dao.php');

 
    if(isset($_POST['update']))
    {
        $id         = $_POST['id'];
        $nome       = $_POST['nome'];
        $telefone   = $_POST['telefone'];
        $cpf        = $_POST['cpf'];
        $idade      = $_POST['idade'];
        $cor        = $_POST['cor'];
        $placa      = $_POST['placa'];
        $prioridade = $_POST['prioridades'];
        $email      = $_POST['email'];
        $senha      = $_POST['senha'];
        $veiculo    =  $_POST['veiculo'];
        $deseja     =  $_POST['deseja'];

        $sqlatuali = "UPDATE Usuario SET nome='$nome',telefone='$telefone',cpf='$cpf',idade='$idade', cor=' $cor',placa='$placa',prioridades='$prioridade', email='$email',senha='$senha',veiculo='$veiculo',deseja='$deseja',
        WHERE id='$id'";


     $result= $conexao->query($sqlatuali);
    }

    header('Location: sistema.php');

    

?>