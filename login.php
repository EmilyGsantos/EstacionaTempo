<?php
 session_start();
    //verificando se email e senha estao no banco de dados

    //SEGURANÇA:impede que o usuario acesse por meio da url o teste login caso nao haja variavel .
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
      include_once('dao.php');
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $sql = "SELECT FROM Usuario Where email == $email and senha == $senha"; //verficando se os dados são os msm que estão no banco 
      $resultlogin = $conexao->query($sql);

        //verificando se os dados existem 
        if(mysqli_num_rows($resultlogin) < 1)
        {   // se nao existir os dados vão ser apagados e redirecionados para o login msm
            unset($_SESSION ['email']);
            unset($_SESSION ['senha']);
          echo "este usuario não existe";
        }else{
            //caso exista vai entrar no sistema 
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');

        }

        
    }// fim do if login
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    
    </head>

    <body>
    
        <form method="POST" action="testelogin.php">
        <h4>
                    <h1>Login</h1>
                <br>

                <label for="email">Email:</label>
                <input label type="text" id="email" name="email" required><br><br>

                <label for="Senha">Senha</label>
                <input label type="text" id="senha" name="senha" required><br>
            </h4>
            <input type="submit" name="submit" id="submit" value="enviar">
        </form>
    </body>
</html>