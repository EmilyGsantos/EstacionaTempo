<?php
 session_start();
    //verificando se email e senha estao no banco de dados

    //SEGURANÇA:impede que o usuario acesse por meio da url o teste login caso nao haja variavel .
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
      include_once('DAO/dao.php');
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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}

body {
    display: flex;
    min-height: 100vh;
    background-color: #325573;
    background-image: url(../images/ad-01\ \(4\).jpeg);
}

main {
    padding: 20px;
    position: fixed;
    z-index: 1;
    padding-left: calc(82px + 20px);

}

#sidebar {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #325573;
    height: 100vh;
    border-radius: 0px 18px 18px 0px;
    position: relative;
    transition: all .5s;
    min-width: 82px;
    z-index: 2;
}

#sidebar_content {
    padding: 12px;

}

#user {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 24px;
}

#user_avatar {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 20px;
}

#user_infos {
    display: flex;
    flex-direction: column;
    color: #ccc;
}

img {
    max-width: 100%;
    width: 100%;
    border-radius: 5px;
    display: block;

}

.imagem-1 {
    /* span 2 significa que ess imagem vai ocupar 2 linhas e será alinhada ao final dela sempre. */
    grid-row: span 2;
    align-self: end;

}

.imagem-2 {
    align-self: end;
}
.ImgIndex{
    width: 200px;
    height: 200px;
}
#user_infos span:last-child {
    color: #ffffff;
    font-size: 12px;
}

.content {
    grid-area: content;
    margin: 0 auto;
}


#side_items {
    display: flex;
    flex-direction: column;
    gap: 8px;
    list-style: none;
}

.side-item {
    border-radius: 8px;
    padding: 14px;
    cursor: pointer;
}

.side-item.active {
    background-color: #782680;
}

.side-item:hover:not(.active),
#logout_btn:hover {
    background-color: #F2911B;
}

.side-item a {
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
}

.side-item.active a {
    color: #e3e9f7;
}

.side-item a i {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
}

#logout {
    display: flex;
    flex-direction: column;
    gap: 8px;
    list-style: none;
    border-top: 1px solid #061f58;
    padding: 5px;
}

#logout_btn {
    border: none;
    padding: 12px;
    font-size: 14px;
    display: flex;
    gap: 20px;
    align-items: center;
    border-radius: 8px;
    text-align: start;
    cursor: pointer;
    background-color: #fafafa;
}

#open_btn {
    position: absolute;
    top: 30px;
    right: -10px;
    background-color: #ffffff;
    color: #000000;
    border-radius: 100%;
    width: 20px;
    height: 20px;
    border: none;
    cursor: pointer;
}

#open_btn_icon {
    transition: transform .3s ease;
}

.open-sidebar #open_btn_icon {
    transform: rotate(180deg);
}

.item-description {
    width: 0px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    font-size: 14px;
    transition: width .6s;
    height: 0px;

}

#sidebar.open-sidebar {
    min-width: 15%;
}

#sidebar.open-sidebar .item-description {
    width: 150px;
    height: auto;
}

#sidebar.open-sidebar .side-item a {
    justify-content: flex-start;
    gap: 14px;
}





.ave {
    background-color: none;
    /*definindo cor de fundo*/
    width: 1300px;
    height: 740px;
    /*definindo altura*/
    /*definindo largura*/
    /*dando espaço entre os itens no cabecalho*/
    border: 3px solid #274fff;
    /*definindo cor da borda*/
    border-radius: 10px;
    BOX-shadow: 0 0 15px #274fff, inset 0 0 15px #274fff;
    text-shadow: 0 0 15px #274fff;
}



/*Nav*/
.cabecalho-nav {
    display: flex;
    gap: 40px;
    align-items: center;
}

.cabecalho {
    background-color: none;
    /*definindo cor de fundo*/
    width: 1325px;
    height: 100px;
    /*definindo altura*/
    display: flex;
    /*definindo largura*/
    justify-content: space-around;
    /*dando espaço entre os itens no cabecalho*/
    border: 3px solid #fdfdfd;
    /*definindo cor da borda*/
    border-radius: 10px;
    BOX-shadow: 0 0 15px #f827ff, inset 0 0 15px #f827ff;
    text-shadow: 0 0 15px #f827ff;

}



/*Nav*/
.cabecalho-nav {
    display: flex;
    gap: 40px;
    align-items: center;
}

.titulo {
    color: rgba(251, 255, 0, 0.911);
    margin: 20px;
    padding-left: 500px;
    text-shadow: 0 0 15px #eef21b;

}

form {
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    background-color: #59252E;
    border: 2px solid #ffffff;
    padding: 15px;
    margin: 20px auto;
    margin-left: 40px;
    margin-top: 250px;
    width: 900px fit-content;
    height: 250px fit-content;
    box-shadow: 5px 10px #F2911B;
    position: absolute;
    transform: translate(-50%, );
    display: flex;
    overflow: hidden;
    border-radius: 20px;
}



/* GRID DO CONTENT */

.content {
    display: grid;
    max-width: 10px;
    grid-template-columns: 1fr 1fr;
    grid-gap: 1px;
    padding-left: 0px;

}

@media (max-width: 500px) {
    .content {
        grid-template-columns: auto;
    }
}

.contentForm {
    display: grid;
    max-width: 500px;
    grid-template-columns: 1fr 1fr;
    grid-gap: 30px;
    padding-left: 40px;
    padding-top: 0px;

}

.contentFormReserva {
    display: grid;
    max-width: 500px;
    grid-template-columns: 1fr 1fr;
    grid-gap: 30px;
    padding-left: 390px;

}

.contentFormPerfil {
    display: grid;
    max-width: 500px;
    grid-template-columns: 1fr 1fr;
    grid-gap: 30px;
    padding-left: 40px;
    padding-top: 2px;

}

/* ANUNCIOS */

.anuncios {
    grid-area: anuncios;
    background: transparent;
    display: grid;
    padding: 30px;
    grid-gap: 30px;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    align-content: start;
    justify-content: space-around;
}

@media (max-width: 1000px) {
    .contentForm {
        grid-template-columns: auto;
    }

    .contentFormB {
        grid-template-columns: auto;
    }
}

.col-wide {
    /* A coluna vai do 1 até o último, por isso -1, assim pega todas as colunas */
    grid-column: 1 / -1;
    color: #fff;
}

.col-wideForm {
    /* A coluna vai do 1 até o último, por isso -1, assim pega todas as colunas */
    grid-column: 1 / -1;
    color: #fff;
}

.col-wideFormB {
    /* A coluna vai do 1 até o último, por isso -1, assim pega todas as colunas */
    grid-column: 1 / -1;
    color: #fff;
}

.cadastro {
    color: rgba(251, 255, 0, 0.911);
    margin: 20px;
    padding-left: 240px;
    text-shadow: 0 0 15px #eef21b;
    top: 96%;
    left: 55%;
}

.conteudo {
    width: 400px;
    height: 700px;
    border: 3px solid rgb(255, 255, 255);
    margin-top: 5px;
    padding: 10px;
    background-color: transparent;
    
}

.conteudoB {
    width: 400px;
    height: 500px;
    border: 1px solid black;
    margin-top: 5px;
    padding: 10px;
    background-color: lightgreen;
}

/*titulo cadastar*/
.buttonD {
    position: absolute;
    top: 140%;
    left: 110%;
    transform: translate(-50%, -50%);
    padding: 15px 43px;
    font-size: 20px;
    background: transparent;
    border: 2px solid #eef21b;
    color: #eef21b;
    cursor: pointer;
    border-radius: 50px;
    width: fixed;
    height: fixed;
}

.buttonD:hover {
    BOX-shadow: 0 0 15px #eef21b, inset 0 0 15px #eef21b;
    text-shadow: 0 0 15px #eef21b;
}

/*titulo cadastar*/
.buttonK {
    position: absolute;
    top: 140%;
    left: 110%;
    transform: translate(-50%, -50%);
  
    font-size: 20px;
    
    border: none;
    color: #ccc;
    
    width: fixed;
    height: fixed;
    background-color: #59252E;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}

.buttonK:hover {
    background-color: #e0730df1;
}

.buttonK:hover a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}

label {
    /*nome do formulario*/
    display: block;
    margin-bottom: 10px;
    /*margem em baixo*/
}

input[type=text],
input[type=password],
/*separador é a virgula*/
input[type=email] {
    width: 100%;
    padding: 10px 250px;
    border: 1px solid #ffffff;
    /*borda do canto*/
    border-radius: 20px;
}

.div i {
    font-size: 30px;
    cursor: pointer;
    position: absolute;
    right: 5%;
    color: #ccc;

}

select {
    width: 100%;
    /*sugestão etc*/
    padding: 10px;
}

input[type=submit] {
    display: block;
    margin-top: 20px;
    padding: 10px;
    background-color: #ffffff;
    color: #333333;

}

.esqueci {
    color: rgba(237, 245, 120, 0.911);
    margin: 5px;
    padding: 7px;
    text-shadow: 0 0 15px rgba(237, 245, 120, 0.911);
    top: 76%;
    left: 85%;
    border: none;
}

.esqueci:hover {
    text-shadow: 0 0 15px rgba(237, 245, 120, 0.911);
}

.relogio {
    display: flex;
    align-items: center;
    justify-content: space-around;
    height: 200px;
    width: 550px;
    background: transparent;
    border-radius: 3px;
    box-shadow: 0px 8px 10px rgba(0, 0, 0, .5);


}

.relogio div {
    height: 170px;
    width: 150px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #fff;
    background: rgba(245, 137, 15, 0.822);
    box-shadow: 5px 5px 15px rgba(0, 0, 0, .7);
    border-radius: 7px;
    letter-spacing: 3px;

}

.relogio span {
    font-weight: bolder;
    font-size: 60px;
}

.relogio span.tempo {
    font-size: 10px;
}

p,
h1,
ul,
li,
blockquote {
    padding: 0px;
    margin: 0px;
}

.citacao p {
    font-size: 1.5em;
    font-style: italic;
    text-align: center;
    max-width: 500px;
    margin: 0 auto;
    color: white;
    margin-right: 50px;
}

.informacoes p+p {
    margin-top: 30px;
}

@media screen and (max-width: 1064px) {
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

.continue-button button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}
.divSearch {
    display: flex;
    flex-direction: column;
    gap: 5px;
}


.col-wideFormReserva {
    display: grid;
    max-width: 500px;
    grid-template-columns: 1fr 1fr;
    grid-gap: 30px;
    padding-left: 90px;
    max-height: fit-content;
}
    



.container {
    border: 2px solid #fff;
    padding: 30px 40px;
    width: 40%;
    min-width: 500px;
  }
  
  .new-task-container {
    background-color: #fff;
    padding: 30px 20px;
    border-radius: 5px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    display: flex;
  }
  
  .new-task-container input {
    flex: 3;
    font-size: 1rem;
    border: 2px solid #d1d3d4;
    border-radius: 5px;
    padding: 12px;
    font-weight: 500;
  }
  
  .new-task-container input:focus {
    outline: none;
    border-color: #41b883;
  }
  
  .new-task-button {
    flex: 1;
    border-radius: 5px;
    font-weight: 500;
    height: 100%;
    font-size: 1rem;
    border: none;
    background-color: #41b883;
    color: #fff;
    padding: 12px;
    margin-left: 12px;
    cursor: pointer;
  }
  
  .tasks-container {
    background-color: #fff;
    padding: 30px 20px;
    margin-top: 60px;
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    width: 100%;
  }
  
  .task-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
    margin-top: 6px;
  }
  
  .task-item i {
    background-color: #41b883;
    color: #fff;
    padding: 12px;
    border-radius: 5px;
  }
  
  .task-item i:hover {
    cursor: pointer;
  }
  
  /* Utilities */
  .error {
    border: 2px solid red !important;
  }
  
  .error::placeholder {
    color: red;
  }
  
  .completed {
    text-decoration: line-through;
  }
  
</style>
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
                        <button><a href="index/index.php">Voltar a Home</a></button>
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


    
   

    