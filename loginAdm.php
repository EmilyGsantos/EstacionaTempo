<?php
 session_start();
    //verificando se email e senha estao no banco de dados

    //SEGURANÇA:impede que o usuario acesse por meio da url o teste login caso nao haja variavel .
    if(isset($_POST['submitA']) && !empty($_POST['emailADM']) && !empty($_POST['senhaADM']))
    {
      include_once('dao.php');
      $emailA = $_POST['emailADM'];
      $senhaA = $_POST['senhaADM'];

      $sql = "SELECT FROM Administrador Where emailADM == $emailA and senhaADM == $senhaA"; //verficando se os dados são os msm que estão no banco 
      $resultlogin = $conexao->query($sql);

        //verificando se os dados existem 
        if(mysqli_num_rows($resultlogin) < 1)
        {   // se nao existir os dados vão ser apagados e redirecionados para o login msm
            unset($_SESSION ['emailADM']);
            unset($_SESSION ['senhaADM']);
          echo "este usuario não existe";
        }else{
            //caso exista vai entrar no sistema 
            $_SESSION['emailADM'] = $emailA;
            $_SESSION['senhaADM'] = $senhaA;
            header('Location: sistemaADM.php');

        }
    }// fim do if login do admnistrador
?>


<!--Formulario de Login do ADM -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/NovoPHPEstacionamento/FormularioCadLog/Formulario-main/assets/css/style.css">
    <title>Login Administrador</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="/NovoPHPEstacionamento/FormularioCadLog/Formulario-main/assets/img/Rectangle 82.png" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    
                    <div class="title">
                        <h1>Login Administrador</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/NovoPHPEstacionamento/IndexTELAum/Login/index.html">Voltar a Home</a></button>
                    </div>
                   
                </div>

                <div class="input-group">
                    
                    
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input  type="email" name="emailADM" id="emailADM" placeholder="Digite seu e-mail" required>
                    </div>


                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input  type="password" name="senhaADM" id="senhaADM" placeholder="Digite sua senha" required>
                    </div>
                </div>

                
                <div class="continue-button">
                    <button><input type="submit" name="submitA" id="submitA" value="Enviar"></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>