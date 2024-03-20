<?php
  include_once('DAO/dao.php');

  // Consulta da Equipe //
  $sql = "SELECT * FROM Equipe ORDER BY id DESC";
  $resultEquipe = $conexao->query($sql);

 ?>
  
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    background-image: url(../codigo/img/icones/fundo.png);
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

#user_infos span:last-child {
    color: #ccc;
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
    background-color: #a12ba5;
}

.side-item:hover:not(.active),
#logout_btn:hover {
    background-color: #a12ba5;
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
    border-top: 1px solid #fff;
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
    background-color: transparent;
}

#open_btn {
    position: absolute;
    top: 30px;
    right: -10px;
    background-color: #333333;
    color: #fff;
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
color: #e3e9f7;
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
    width: 1525px;
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
    padding-top: 90px;
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
    height: 450px fit-content;
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
    height: 500px;
    border: 1px solid black;
    margin-top: 5px;
    padding: 10px;
    background-color: lightgreen;
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
    padding: 5px 250px;
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

    .sidebar_content {
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
  




 
</style>

<body>
		 
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
            <a href="#" class="logo"><img src="/codigo/img/Ellipse 1.png" alt="Estacionatempo"></a>
    
                <p id="user_infos">
                    <span class="item-description">
                        Administrador
                    </span>
                    <span class="item-description">
                        Bem-vindo(a)
                    </span>
                </p>
            </div>
    
            <ul id="side_items">
                <li class="side-item ">
                    <a href="index/SolicitaçõesAdm.php">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Solicitações
                        </span>
                    </a>
                </li>
                <li class="side-item active">
                    <a href="equipes.php">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Equipe
                        </span>
                    </a>
                </li>

               

                <li class="side-item ">
                    <a href="index/ReservarVagaAdm.php">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Reserva de<br>
                            vaga
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="index/DisponibilizarVaga.php">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Disponibilizar<br>
                            vaga
                        </span>
                    </a>
                </li>
                <li class="side-item ">
                    <a href="index/PerfilAdm.php">
                        <i class="fa-solid fa-user"></i>
                        <span class="item-description">
                            Perfil
                        </span>
                    </a>
                </li>
                
            </ul>
    
            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <a href="sairAdm.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Logout
                </span>
                <!--NOVO script---->
                </a>
            </button>
        </div>
    </nav>   

    <main>
        <div class="titulo">
            <h1>EstacionaTempo</h1><br><br>
            
         
            <h2>Edite sua Equipe</h2><br>
         
            <!--Retorna TODAS AS EQUIPES Criadas pelos Administradores Aqui estão os nomes das Equipes Criadas e o icone de atualizar --->
     <?php 
        while($equipes_see = mysqli_fetch_assoc($resultEquipe)) 
          {
            echo "<tr>";
                      echo "<td>".$equipes_see['nome_equipe']."</td>";               
                      echo "<td>
                            <a class='bnt bnt-primary' href='edicaoEquipes.php?id=$equipes_see[id]'> 
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class= 'bi bi-pencil-square' viewBox='0 0 16 16'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'>
                              </svg>
                          <a/>
                      </td>";
            echo "<tr>";
          }// fim do while 
        ?>
    </tbody> 
		</div>	
    
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/codigo/index/script.js"></script>
    
    <header class="cabecalho">

        
        <nav class="cabecalho-nav">
            

        </nav>
        
    </header>

	
   

</body>
</html>

   

