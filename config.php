<?php
  //pegar e mostrar os dados presentes no banco de dados e mostrar em tela 
  session_start();

  include_once('dao.php'); //chamando o banco 

  $sql = "SELECT FROM Usuario ORDEM BY id DESC";
  $result = $conexao->query($sql);

?>