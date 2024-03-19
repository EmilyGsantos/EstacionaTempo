<?php

 session_start();

  //parametros que estao vindo do login
  //SEGURANÇA:impede que o usuario acesse por meio da url o teste login caso nao haja variavel .
      if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){ //!empyt -nao estiver vazia 
      include_once('DAO/dao.php');
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      //verificando se os dados que inseri no login são iguais aos que estao la no banco de dados na qual passei atraves do cadastro 
      $sql = "SELECT * FROM Usuario WHERE email = '$email' and senha = '$senha'";
      $result = $conexao->query($sql); //query - requisitando os dados do banco atraves da variavel sql 
      
    // fim da função
    
      
      //verifica se os dados existem no banco 
      if(mysqli_num_rows($result) < 1){   // mysqli_num_rows n de linhas
        unset($_SESSION ['email']);
        unset($_SESSION ['senha']);
        echo "Login e senha não encontrados no sistema"; // se nao existir 
      }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
      }
    }else{
        header('Location: login.php');//nao acessa
    }// fim do if 



  
?>