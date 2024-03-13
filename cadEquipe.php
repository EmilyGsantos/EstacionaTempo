<?php
 // PÁGINA DE CADASTRO DAS EQUIPES
 session_start();
 include_once('dao.php'); 

 
 


 // Criação de  EQUIPE ////
 if(isset($_POST['criaequipe'])){
            
    $nomeEquipe   = $_POST['nome_equipe'];
    $qntdVaga     =  $_POST['qntvaga'];
    $qntParciais   = $_POST['qntParciais'];
        
    $result = mysqli_query($conexao,"INSERT INTO Equipe(nome_equipe,qntvaga,qntParciais)VALUES('$nomeEquipe','$qntdVaga','$qntParciais')");

    header('Location: login.php');
    }// fim do if cadastrarEquipe

  
   
?>

<!--Formuário Equipes-->
<form method="POST" action="cadEquipe.php">
        <label>Nome da Equipe:</label>
        <input label type="text" id="nome_equipe" name="nome_equipe" required><br><br>

        <label >Quantidade de vagas</label>
        <input label type="text" id="qntvaga" name="qntvaga" required><br><br>
      

        <label >Quantidade de vagas Fixas Parciais</label>
        <input label type="text" id="qntParciais" name="qntParciais" required><br><br>
        <br>

        <input type="submit" name="criaequipe" id="criaequipe">
    </form>

 

 