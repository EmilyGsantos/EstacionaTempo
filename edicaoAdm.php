<?php 
 
 // Perfil com os dados do Admnistrador para ele atualizar //
  if(!empty($_GET['id'])) //verificando se o id existe para poder atualizar  
  {
        include_once('DAO/dao.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM Administrador WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($Adm = mysqli_fetch_assoc($result))
            {
                $nomeADM        = $Adm['nomeADM'];
                $telefoneADM    = $Adm ['telefoneADM'];
                $idadeADM       = $Adm['idadeADM'];
                $emailADM       = $Adm['emailADM'];
                $senhaADM       = $Adm['senhaADM'];
               
            }
                
        }else{
            echo "ataulização nao sucedida!";
        }
    }else
    {
      header('Location: sistemaAdm.php');
    }// fim do if 
?>

<form method="POST" action="saveAdm.php">
    <div class="input-group">
        <div class="input-box">
            <label for="firstname">Nome</label>
            <input  type="text" id="nomeADM" name="nomeADM" value="<?php echo $nomeADM?>" required><!--Passando o dado cadstrado para o formulário-->
        </div>

        <div class="input-box">
                <label for="number">Celular</label>
                <input  type="tel" id="telefoneADM" name="telefoneADM" value="<?php echo $telefoneADM?>" required>
            </div> 

           

            <div class="input-box">
            <label for="number">Idade</label>
            <input  type="text" name="idadeADM" id="idadeADM" value="<?php echo $idadeADM?>" required>
            </div>

            <div class="input-box">
            <label for="email">E-mail</label>
            <input  type="emailADM"  id="emailADM" name="emailADM"  value="<?php echo $emailADM?>"  required>
        </div>
    
            <div class="input-box">
            <label for="password">Senha</label>
                <input type="password" id="senhaADM" name="senhaADM" value="<?php echo $senhaADM?>"  required>
          </div>
          <input type="hidden" name="id" value="<?php echo $id ?>"><!--Passando o Id do adm de forma escondida--->

        <input type="submit" name="updateAdm" id="updateAdm">
 </form>           