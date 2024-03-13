<?php

   //Atualizar o Usuário//
    include_once('dao.php');
    if(isset($_POST['update'])) // se o botão update for acionado entt os novos dados serão enviados para o banco 
    {
            $id = $_POST['id'];
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
          

          $sqlUpdate = "UPDATE Usuario SET nome='$nome', telefone=' $telefone',cpf='$cpf',idade=' $idade',cor=' $cor',placa='$placa',prioridades='$prioridade',email='$email',senha='$senha',veiculo='$veiculo' WHERE id='$id'";
          
          $result = $conexao->query($sqlUpdate);   
         header('location:sistema.php');          
    }  

  
  
?>