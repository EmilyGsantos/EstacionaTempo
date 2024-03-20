<?php

   //Atualizar o Usuário//
    include_once('DAO/dao.php');
    if(isset($_POST['updateAdm'])) // se o botão update for acionado entt os novos dados serão enviados para o banco 
    {
            $id = $_POST['id'];

           $nomeADM       = $_POST['nomeADM'];
           $telefoneADM  = $_POST['telefoneADM'];
           $idadeADM      = $_POST['idadeADM'];
           $emailADM      = $_POST['emailADM'];
           $senhaADM      = $_POST['senhaADM'];

          $sqlUpdate = "UPDATE Administrador SET nomeADM='$nomeADM', telefoneADM=' $telefoneADM', idadeADM=' $idadeADM',emailADM='$email'ADM, senhaADM='$senhaADM' WHERE id='$id'";
          
          $result = $conexao->query($sqlUpdate);   
         header('location:sistemaAdm.php');          
    }  

  
  
?>