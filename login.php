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


<!--Formulátrio de Login-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/NovoPHPEstacionamento/FormularioCadLog/Formulario-main/assets/css/style.css">
    <title>Login </title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="/NovoPHPEstacionamento/FormularioCadLog/Formulario-main/assets/img/Rectangle 82.png" alt="">
        </div>
        <div class="form">
            <form method="POST" action="testelogin.php">
                <div class="form-header">
                    
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/NovoPHPEstacionamento/IndexTELAum/Login/index.html">Voltar a Home</a></button>
                    </div>
                   
                </div>

                <div class="input-group">
                    
                    
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email"  placeholder="Digite seu e-mail" required>
                    </div>


                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input  type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <!--Botão de Entrar-->
                <div class="continue-button">
                    <button><input type="submit" name="submit" id="submit" value="enviar"></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


    
   

    