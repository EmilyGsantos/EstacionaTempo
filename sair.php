
<?php 
     session_start();
     //encerrando a sessão botão sair por isso dentro do botão !!!
      unset($_SESSION ['email']);
      unset($_SESSION ['senha']);
     header('Location: login.php');   
?>