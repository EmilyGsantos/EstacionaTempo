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
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>CadastroAdm</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//Rectangle 82.png" alt="">
        </div>
        <div class="form">
            <form method="POST" action="cadEquipe.php">
                <div class="form-header">
                    
                    <div class="title">
                        <h1>Crie sua equipe</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/NovoPHPEstacionamento/IndexTELAum/Login/index.html">Voltar a Home</a></button>
                    </div>
                   
                </div>
                
                <div class="input-group">
                    
                    
                    <div class="input-box">
                        <label for="car">Nome da equipe</label>
                        <input  type="text" name="nome_equipe" id="nome_equipe" placeholder="Crie um nome para sua equipe" required>
                    </div>

                    <div class="input-box">
                        <label for="car">Numero de vagas do estacionamento</label>
                        <input  type="text" name="qntvaga" id="qntvaga" placeholder="Digite a quantidade" required>
                    </div>
                </div>
                

                <div class="input-box">
                        <label for="car">Numero de vagas Fixas Parciais</label>
                        <input  type="text" name="qntParciais" id="qntParciais" placeholder="Digite a quantidade de vagas fixas" required>
                    </div>
                </div>
                

                <div class="continue-button">
                    <button> <input type="submit" name="criaequipe" id="criaequipe">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
     
 

 