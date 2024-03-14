 <?php
   include_once('dao.php'); // conectando o banco de dados
  

  // Cadastro do Admnistrador // 
  if(isset($_POST['submitAdm'])){

   $nomeADM = $_POST['nomeADM'];
   $cpfADM  = $_POST['cpfADM'];
   $idadeADM = $_POST['idadeADM'];
   $telefoneADM = $_POST['telefoneADM'];
   $emailADM = $_POST['emailADM'];
   $senhaADM = $_POST['senhaADM'];
   $possuirVaga = $_POST['possuir_vaga'];

   $resultado = mysqli_query($conexao, "INSERT INTO  Administrador(nomeADM,cpfADM,idadeADM,telefoneADM,emailADM,senhaADM,possuir_vaga)VALUES('$nomeADM','$cpfADM','$idadeADM','$telefoneADM','$emailADM','$senhaADM','$possuirVaga')");
      
   header('Location: cadEquipe.php');
  }// fim do if cadastrar

  /*<form method="POST" action="cadAdm.php">
   <input type="submit" name="submitAdm" id="submitAdm">  
   
  
  
  */ 

   
?>

<!--Formulário Adm--->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>CadastroADM</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="/NovoPHPEstacionamento/FormularioCadLog/Formulario-main/assets/img/Rectangle 82.png" alt="">
        </div>
        <div class="form">
            <form method="POST" action="cadAdm.php">
                <div class="form-header">
                    
                    <div class="title">
                        <h1>Cadastro ADM</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/NovoPHPEstacionamento/IndexTELAum/Login/index.html">Voltar a Home</a></button>
                    </div>
                    <div class="login-button">
                        <button><a href="/NovoPHPEstacionamento/FormularioCadLog/Formulario-main/loginIndexADM.html">Login</a></button>
                    </div>
                   
                </div>

                <div class="input-group">  
                    
                    <div class="input-box">
                        <label for="car">Nome</label>
                        <input  type="text" name="nomeADM" id="nomeADM" placeholder="Informe seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="car">CPF</label>
                        <input  type="text" name="cpfADM" id="cpfADM" placeholder="Informe seu CPF" required>
                    </div>

                    <div class="input-box">
                        <label for="car">Idade</label>
                        <input  type="text" name="idadeADM" id="idadeADM" placeholder="Informe sua idade " required>
                    </div>

                    <div class="input-box">
                        <label for="car">Celular</label>
                        <input  type="tel" name="telefoneADM" id="telefoneADM" placeholder="(11) 999999" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input  type="email" name="emailADM" id="emailADM" placeholder="Digite seu e-mail" required>
                    </div>


                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input  type="password" name="senhaADM" id="senhaADM" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input  type="password" name="senhaADM" id="senhaADM" placeholder="Digite sua senha novamente" required>
                    </div>
                    

                    <label><b>Deseja Possuir uma vaga?</b></label>
                        <input type="checkbox" name="possuir_vaga" id="possuir_vaga" value="1" > Sim </input>
                        <input type="checkbox" name="possuir_vaga" id="possuir_vaga" value="0" > Não</input><br><br>
             </div>

                
                <div class="continue-button">
                    <button><input type="submit" name="submitAdm" id="submitAdm"> </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>