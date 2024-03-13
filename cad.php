<?php
    //se o botão submit for clicado entt ele envia OS DADOS PARA O BANCO

    if(isset($_POST['submit']))
    { 
        include_once('dao.php');

        $nome      = $_POST['nome'];
        $telefone  = $_POST['telefone'];
        $cpf       = $_POST['cpf'];
        $idade     = $_POST['idade'];
        $cor        = $_POST['cor'];
        $placa      = $_POST['placa'];
        $prioridade = $_POST['prioridades'];
        $email      = $_POST['email'];
        $senha      = $_POST['senha'];
        $veiculo    =  $_POST['veiculo'];
        $deseja     =  $_POST['deseja'];
        

        $result = mysqli_query($conexao, "INSERT INTO Usuario(nome,telefone,cpf,idade,cor,placa,prioridades,email,senha,veiculo,deseja) VALUES('$nome','$telefone','$cpf','$idade','$cor','$placa','$prioridade','$email','$senha','$veiculo','$deseja')");

        
         header('Location:login.php'); 
        
        
    }//fim do if cadastrar usuario

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstacionaTempo</title>
</head>
<body>
    <form method="POST" action="cad.php">
        
                <h1>Cadastro</h1>
                </div><br>

            
            <label for="nome">Nome:</label>
            <input label type="text" id="nome" name="nome" required><br><br>

            <label for="CPF">CPF</label>
            <input label type="text" id="cpf" name="cpf" required><br><br>

            <label for="Idade">Idade:</label>
            <input label type="text" id="idade" name="idade" required><br><br>

            <label for="Telefone">Telefone:</label>
            <input label type="text" id="telefone" name="telefone" required><br><br>

            <label for="Prioridades">Prioridades:</label>
            <input label type="text" id="prioridades" name="prioridades" required><br><br>

            <label for="email">Email:</label>
            <input label type="text" id="email" name="email" required><br><br>

            <label for="Senha">Senha</label>
            <input label type="text" id="senha" name="senha" required><br><br>

            <label>Veiculo:</label>
            <select name="veiculo" id="veiculo">
                <option value="car">Carro</option>
                <option value="moto">Moto</option>
                <option value="outro">Outro</option>
            </select><br>

           <label for="Placa">Placa:</label>
           <input label type="text" id="placa" name="placa" required><br><br>
                        
            <label for="cor">Cor do veiculo:</label>
            <input label type="text" id="cor" name="cor" required><br><br>

            
    
            <input type="submit" name="submit" id="submit">    
    </form>
</body>

</html>