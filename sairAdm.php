<?php 
     session_start();
     //encerrando a sessão botão sair por isso dentro do botão !!!
      unset($_SESSION ['emailADM']);
      unset($_SESSION ['senhaADM']);
     header('Location: loginAdm.php');   
   
?>