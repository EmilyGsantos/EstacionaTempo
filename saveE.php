<?php
   // Atualizar Equipes //
   include_once('DAO/dao.php');
   if(isset($_POST['updateEquipe']))
   {
     $id          = $_POST['id'];
     $nomeEquipe  = $_POST['nome_equipe'];
     $qntdVaga    = $_POST['qntvaga'];
     $qntParciais = $_POST['qntParciais'];

     $sqlUpdateE = "UPDATE Equipe SET nome_equipe='$nomeEquipe', qntvaga = '$qntdVaga', qntParciais= '$qntParciais', WHERE id='$id'";
     
     $resultE = $conexao->query($sqlUpdateE);
     header('Location: edicaoEquipes.php');

   }  
  
 ?>