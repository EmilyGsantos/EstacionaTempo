<?php 
 
 // Perfil com os dados do Usuário para ele atualizar //
  if(!empty($_GET['id'])) //verificando se o id existe para poder atualizar  
  {
        include_once('DAO/dao.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM Usuario WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome       = $user_data['nome'];
                $telefone   = $user_data ['telefone'];
                $cpf        = $user_data['cpf'];
                $idade      = $user_data['idade'];
                $cor        = $user_data['cor'];
                $placa      = $user_data['placa'];
                $prioridade = $user_data['prioridades'];
                $email      = $user_data['email'];
                $senha      = $user_data['senha'];
                $veiculo    = $user_data['veiculo'];
            }
                
        }else{
            echo "ataulização nao sucedida!";
        }
    }else
    {
      header('Location: sistema.php');
    }// fim do if 
?>


<!--Dados do Usuário  cadastrado para mandar p o atualizar-->

<form method="POST" action="save.php">
    <div class="input-group">
        <div class="input-box">
            <label for="firstname">Nome</label>
            <input  type="text" id="nome" name="nome" value="<?php echo $nome?>" required><!--Passando o dado cadstrado para o formulário-->
        </div>

        <div class="input-box">
                <label for="number">Celular</label>
                <input  type="tel" id="telefone" name="telefone" value="<?php echo $telefone?>" required>
            </div> 

            <div class="input-box">
            <label for="number">CPF</label>
                <input  type="text"  id="cpf" name="cpf" value="<?php echo $cpf?>"   required>
            </div>

            <div class="input-box">
            <label for="number">Idade</label>
            <input  type="text" name="idade" id="idade" value="<?php echo $idade?>" required>
            </div>

            <div class="input-box">
            <label for="email">E-mail</label>
            <input  type="email"  id="email" name="email"  value="<?php echo $email?>"  required>
        </div>
    
            <div class="input-box">
            <label for="password">Senha</label>
                <input type="password" id="senha" name="senha" value="<?php echo $senha?>"  required>
            </div>

       
               
            <!--Arrumar-->
        <div class="input-box">
                <label for="car">Tipo do veiculo </label>
                <select id="veiculo" name="veiculo" value="<?php echo $veiculo?>">
                    <option value="car">Carro</option>
                    <option value="moto">Moto</option>
                    <option value="outro">Outro</option>
                </select><br>
        </div>
                        

        <div class="input-box">
            <label for="car">Cor do veiculo</label>
            <input  type="text" id="cor" name="cor"  value="<?php echo $cor?>" required>
        </div>

        <div class="input-box">
            <label for="car">Placa do veiculo</label>
            <input  type="text" id="placa" name="placa"  value="<?php echo $placa?>"  required>
        </div>

            <div class="input-box">
            <label for="car">Prioridade</label>
                <input  type="text"  id="prioridades" name="prioridades" value="<?php echo $prioridade?>"  required>
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>"><!--Passando o Id do usuário de forma escondida--->

        <input type="submit" name="update" id="update">
    </div>
</form>