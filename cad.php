<?php
  // Cadastro PArticipante //
    //se o botão submit for clicado entt ele envia OS DADOS PARA O BANCO
    if(isset($_POST['submit']))
    { 
        include_once('DAO/dao.php');

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
        

        $result = mysqli_query($conexao, "INSERT INTO Usuario(nome,telefone,cpf,idade,cor,placa,prioridades,email,senha,veiculo) VALUES('$nome','$telefone','$cpf','$idade','$cor','$placa','$prioridade','$email','$senha','$veiculo')");

        
         header('Location:login.php'); 
        
        
    }//fim do if cadastrar usuario

?>

<!--Formulário Participante--->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #0c0ce94d;
    background-color: #59252E;
    
}

.container {
    width: 80%;
    height: 80vh;
    display: flex;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
}

.form-image {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #325573;
    padding: 1rem;
}

.form-image img {
    width: 31rem;
}

.form {
    width: 70%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    padding: 3rem;
}

.form-header {
    margin-bottom: 3rem;
    display: flex;
    justify-content: space-between;
}

.login-button {
    display: flex;
    align-items: center;
}

.login-button button {
    border: none;
    background-color: #59252E;
    padding: 0.4rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.login-button button:hover {
    background-color: #e0730df1;
}
.input-cadadm:hover{
    background-color: #e0730df1;

}
.input-cadadm a{
    text-decoration: none;
    font-weight: 500;
    color: #fff;
}
.login-button button a {
    text-decoration: none;
    font-weight: 500;
    color: #fff;
}
.login-button {
    display: flex;
    align-items: center;
}

.Home button {
    border: none;
    background-color: #59252E;
    padding: 0.4rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.Home button:hover {
    background-color: #e0730df1;
}

.Home button a {
    text-decoration: none;
    font-weight: 500;
    color: #fff;
}
.home {
    display: flex;
    align-items: center;
}
/*linha em baixo do cadastrar*/
.form-header h1::after {
    content: '';
    display: block;
    width: 5rem;
    height: 0.3rem;
    background-color: #e0730df1;
    margin: 0 auto;
    position: absolute;
    border-radius: 10px;
}

.input-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1rem 0;
}

.input-box {
    display: flex;
    flex-direction: column;
    margin-bottom: 1.1rem;
}

.input-box input {
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #0000001c;
    font-size: 0.8rem;
}

.input-box input:hover {
    background-color: #eeeeee75;
}

.input-box input:focus-visible {
    outline: 1px solid #59252E;
}

.input-box label,
.gender-title h6 {
    font-size: 0.75rem;
    font-weight: 600;
    color: #000000c0;
}

.input-box input::placeholder {
    color: #000000be;
}

.gender-group {
    display: flex;
    justify-content: space-between;
    margin-top: 0.62rem;
    padding: 0 .5rem;
}

.gender-input {
    display: flex;
    align-items: center;
}

.gender-input input {
    margin-right: 0.35rem;
}

.gender-input label {
    font-size: 0.81rem;
    font-weight: 600;
    color: #000000c0;
}

.continue-button button {
    width: 100%;
    margin-top: 2.5rem;
    border: none;
    background-color: #59252E;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}

.continue-button button:hover {
    background-color: #e0730df1;
}

.continue-button button a  {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}

@media screen and (max-width: 800px) {
    .form-image {
        display: none;
        width: 5%;
        height: 5%;
    }
    .container {
        width: 10%;
    }
    .form {
        width: 80%;
    }
}

@media screen and (max-width: 1264px) {
    .container {
        width: 90%;
        height: auto;
    }
    .input-group {
        flex-direction: column;
        z-index: 5;
        padding-right: 5rem;
        max-height: 10rem;
        overflow-y: scroll;
        flex-wrap: nowrap;
    }
    .gender-inputs {
        margin-top: 2rem;
    }
    .gender-group {
        flex-direction: column;
    }
    .gender-title h6 {
        margin: 0;
    }
    .gender-input {
        margin-top: 0.5rem;
    }
    
}
.input-cadadm{
        border: 2px solid #59242E;
        background-color: #59252E;
        padding: 0.4rem 1rem;
        border-radius: 5px;
        cursor: pointer;
        color:white;
    }
</style>
<body>
    <div class="container">
    <div class="form-image">
            <img src="/codigo/img/Rectangle 82.png" alt="">
        </div>

        <div class="form">
            <form method="POST" action="cad.php">
                <div class="form-header">
                    
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/codigo/index/index.php">Voltar a Home</a></button>
                    </div>
                   
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input  type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                    </div>

                   <div class="input-box">
                        <label for="number">Celular</label>
                        <input  type="tel" name="telefone" id="telefone" placeholder="(xx) xxxx-xxxx" required>
                    </div> 

                    <div class="input-box">
                        <label for="number">CPF</label>
                        <input  type="text" name="cpf" id="cpf" placeholder="3689515" required>
                    </div>

                      <div class="input-box">
                        <label for="number">Idade</label>
                        <input  type="text" name="idade" id="idade" placeholder="informe sua idade" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input  type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
                    </div>

                   
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input  type="password" name="senha" id="senha" placeholder="Digite sua senha novamente" required>
                    </div>
                    
                     
                    <div class="input-box">
                        <label for="car">Tipo do veiculo </label>
                       <select name="veiculo" id="veiculo">
                            <option value="car">Carro</option>
                            <option value="moto">Moto</option>
                            <option value="outro">Outro</option>
                      </select><br>
                    </div>
                    

                    <div class="input-box">
                        <label for="car">Cor do veiculo</label>
                        <input  type="text" name="cor" id="cor" placeholder="Informe a cor do seu veiculo" required>
                    </div>

                    <div class="input-box">
                        <label for="car">Placa do veiculo</label>
                        <input  type="text" name="placa" id="placa" placeholder="Informe a placa do seu veiculo" required>
                    </div>

                    <div class="input-box">
                        <label for="car">Prioridade</label>
                        <input  type="text" name="prioridades" id="prioridades" placeholder="Caso tenha informe seu problema de mobilidade " required>
                    </div>

                </div>

                <div class="continue-button">
                    <input class="input-cadadm" type="submit" name="submit" id="submit"> 
                </div>
            </form>
        </div>
    </div>
</body>

</html>
