<!DOCTYPE html>
<html lang="pt-br">
<!--Passar estilização para equipes.php!!--->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/NovoPHPEstacionamento/sidebar-main-ADM/src/css/style.css">
  
    <title>Solicitações Administrador</title>
</head>
<style>

.container {
    width: 80%;
    height: 80vh;
    display: flex;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
}


.form-image img {
    width: 31rem;
}

.form {
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: rgb(255, 255, 255);
    padding: 2rem;
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

.continue-button button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}

@media screen and (max-width: 1330px) {
    .form-image {
        display: none;
    }
    .container {
        width: 50%;
    }
    .form {
        width: 100%;
    }
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
    border: 3px solid #fdfdfd ;
    /*definindo cor da borda*/
    border-radius: 10px;
    BOX-shadow: 0 0 15px #f827ff, inset 0 0 15px #f827ff ;
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
.conteudo{
    width: 400px;
    height: 500px;
    border: 1px solid black;
    margin-top: 5px;
    padding: 10px;
    background-color: lightgreen;
}
.conteudoB{
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
                <li class="side-item active">
                    <a href="/codigo/index/SolicitaçõesAdm.php">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Solicitações
                        </span>
                    </a>
                </li>
                <li class="side-item ">
                        <a href="../equipes.php">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Equipe
                        </span>
                    </a>
                </li>

               

                <li class="side-item ">
                    <a href="/codigo/index/ReservarVagaAdm.php">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Reserva de<br>
                            vaga
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a href="/codigo/index/DisponibilizarVaga.php">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Disponibilizar<br>
                            vaga
                        </span>
                    </a>
                </li>
                
                <li class="side-item ">
                    <a href="/codigo/index/PerfilAdm.php">
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
                <a href= "sairAdm.php">
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
            <h1>EstacionaTempo</h1><br>
            <br>
            <img src="/codigo/img/Rectangle 82.png" alt="Avatar">
            <div class="continue-button">
                <button><a href="/codigo/index/ListaDeUsuarios.php">Ver Lista de Usuários</a> </button>
            </div>
          <section class="content">
            
        </section>


    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/codigo/index/script.js"></script>
    

    <header class="cabecalho">


        <nav class="cabecalho-nav">


        </nav>
        
    </header>


</body>

</html>