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

   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar ADM</title>
</head>
<body>

    <form method="POST" action="cadAdm.php">
            
            <h1>Cadastro ADM</h1>
            
        <label for="nome">Nome:</label>
        <input label type="text" id="nomeADM" name="nomeADM" required><br><br>

        <label for="CPF">CPF</label>
        <input label type="text" id="cpfADM" name="cpfADM" required><br><br>

        <label for="Idade">Idade:</label>
        <input label type="text" id="idadeADM" name="idadeADM" required><br><br>

        <label for="Telefone">Telefone:</label>
        <input label type="text" id="telefoneADM" name="telefoneADM" required><br><br>


        <label for="email">Email:</label>
        <input label type="text" id="emailADM" name="emailADM" required><br><br>

        <label for="Senha">Senha</label>
        <input label type="text" id="senhaADM" name="senhaADM" required><br><br>

        <label><b>Deseja Possuir uma vaga?</b></label>
        <input type="checkbox" name="possuir_vaga" id="possuir_vaga" value="1" > Sim </input>
        <input type="checkbox" name="possuir_vaga" id="possuir_vaga" value="0" > Não</input><br><br>

        <input type="submit" name="submitAdm" id="submitAdm">    
    </form>


    
</body>
</html>

