<?php 

  if(!empty($_GET['id'])) //verificando se o id existe para poder atualizar  
  {
        include_once('dao.php');

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form method="POST" action='save.php'>

    <label for="nome">Nome:</label>
            <input label type="text" id="nome" name="nome" value="<?php echo $nome?>" required><br><br><!--Passando o dado para o formulário-->

            <label for="CPF">CPF</label>
            <input label type="text" id="cpf" name="cpf"  value="<?php echo $cpf?>" required><br><br>

            <label for="Idade">Idade:</label>
            <input label type="text" id="idade" name="idade" value="<?php echo $idade?>" required><br><br>

            <label for="Telefone">Telefone:</label>
            <input label type="text" id="telefone" name="telefone" value="<?php echo $telefone?>" required><br><br>

            <label for="cor">Cor do veiculo:</label>
            <input label type="text" id="cor" name="cor" value="<?php echo $cor?>" required><br><br>

            <label for="Placa">Placa:</label>
            <input label type="text" id="placa" name="placa" value="<?php echo $placa?>" required><br><br>

            <label for="Prioridades">Prioridades:</label>
            <input label type="text" id="prioridades" name="prioridades" required><br><br>

            <label for="email">Email:</label>
            <input label type="text" id="email" name="email" value="<?php echo $email?>" required><br><br>

            <label for="Senha">Senha</label>
            <input label type="text" id="senha" name="senha" value="<?php echo $senha?>" required><br><br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
          
        <input type="submit" name="update" id="update">
        
    </form>

</body>
</html>