<!DOCTYPE html>
<html>

<head>
  <title>Wildbeast - Projeto CSS Grid Layout - Guia Completo - display: grid;</title>
  <meta name="description"
    content="Wildbeast - Projeto - Aprenda a utilizar o CSS Grid Layout para a criação de layouts responsivos com CSS nesse Guia Completo.">
  <meta name="author" content="Origamid" />
  <meta name="theme-color" content="#693bb6">
  <meta property="og:title" content="Wildbeast - Projeto - CSS Grid Layout - Guia Completo - display: grid;" />
  <meta property="og:description"
    content="Wildbeast - Projeto - Aprenda a utilizar o CSS Grid Layout para a criação de layouts responsivos com CSS nesse Guia Completo." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.origamid.com/projetos/wildbeast/index.html" />
  <meta property="og:image" content="https://www.origamid.com/projetos/wildbeast/img/css-grid-layout.png" />
  <meta property="og:site_name" content="Origamid" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico">
</head>
<style>
  body,
p,
h1,
ul,
li,
blockquote {
  padding: 0px;
  margin: 0px;
}

body {
  font-family: "Volkorn", Georgia, Serif;
  background-color: #325573;
  background-image: url(../codigo/img/Rectangle\ 82.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  margin: 60;
  height: 100vh;
  width: 100vw;
  color: white; 
}
.item-description {
  width: 0px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  font-size: 14px;
  transition: width .6s;
  height: 0px;
color: #bbb3c7;
}

li {
  list-style: none;
}

a {
  text-decoration: none;
}


img {
  max-width: 100%;
  width: 100%;
  border-radius: 5px;
  display: block;
}

/* GRID GERAL */

.estrutura {
  display: grid;
  /* Minmax é para definir o mínimo que quero dela, a última eu quero 300px fixo sempre. */
  grid-template-columns: minmax(160px, 1fr) 3fr 300px;
  grid-template-areas:
    "header header header"
    "sidenav content anuncios"
    "footer footer footer"
  ;
}

@media (max-width: 1200px) {
  .estrutura {
    grid-template-areas:
      "header header header"
      "sidenav content content"
      "sidenav anuncios anuncios"
      "footer footer footer"
    ;
  }
}

@media (max-width: 760px) {
  .estrutura {
    grid-template-columns: 100%;
    /* 1fr está bugando */
    grid-template-areas:
      "header"
      "sidenav"
      "content"
      "anuncios"
      "footer"
    ;
  }
}

/* HEADER */

.header {
  grid-area: header;
  background: transparent;
  padding: 30px;
  align-items: center;
  display: grid;
  grid-template-columns: 1fr auto;
  border: 3px solid #fdfdfd;
  /*definindo cor da borda*/
  border-radius: 10px;
  BOX-shadow: 0 0 15px #325573, inset 0 0 15px #eef21b;
  text-shadow: 0 0 15px #eef21b;

}





.logo {
  max-width: 100px;
}


.header nav ul {
  display: flex;
  flex-wrap: wrap;
}

.header nav a {
  display: block;
  padding: 10px;
  color: white;
  font-size: 1.125em;
  background: rgba(0, 0, 0, .1);
  border-radius: 5px;
  transition: 0.1s;
}

.header nav a:hover {
  background: rgba(0, 0, 0, .5);
}

.header li+li {
  margin-left: 30px;
}

@media (max-width: 760px) {
  .header {
    grid-template-columns: auto;
  }

  .logo {
    margin-bottom: 20px;
  }

  .header nav a {
    font-size: 1em;
  }

  .header li+li {
    margin-left: 10px;
  }
}

/* SIDENAV */

.sidenav {
  grid-area: sidenav;
  background: transparent;
  padding: 30px;
}

.sidenav-item a {
  display: block;
  min-width: 60px;
  max-width: 100px;
  margin: 0 auto 30px auto;
  background: #d3ba9b;
  box-shadow: 5px 5px 15px 0px rgba(44, 44, 44, 0.15);
  border-radius: 5px;
  padding: 20px;
  transition: .1s ease-out;
}

.sidenav-item a:hover {
  background: #F2911B;
}

.sidenavd {
  grid-area: sidenav;
  background: transparent;
  padding: 30px;
  
}

.sidenavd-item a {
  display: block;
  min-width: 60px;
  max-width: 100px;
  margin: 0 auto 30px auto;
  background: #c42e47;
  box-shadow: 5px 5px 15px 0px rgba(44, 44, 44, 0.15);
  border-radius: 5px;
  padding: 20px;
  transition: .1s ease-out;
  border: 2px #fff;
}

.sidenavd-item a:hover {
  background: #F2911B;
}

@keyframes seta {
  from {
    right: 30px;
  }

  to {
    right: 20px;
  }
}

@media (max-width: 760px) {
  .sidenav {
    position: relative;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .sidenav::after {
    content: '→';
    position: absolute;
    top: 5px;
    right: 30px;
    color: rgba(0, 0, 0, .3);
    animation: seta .5s ease-in 0s infinite alternate;
  }

  .sidenav ul {
    display: flex;
    flex-wrap: nowrap;
  }

  .sidenav-item {
    flex: 1 0 60px;
  }

  .sidenav {
    padding: 0 30px;
  }

  .sidenav-item a {
    margin: 30px 30px 30px 0px;
  }
}

@media (max-width: 760px) {
  .sidenavd {
    position: relative;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .sidenavd::after {
    content: '→';
    position: absolute;
    top: 5px;
    right: 30px;
    color: rgba(0, 0, 0, .3);
    animation: seta .5s ease-in 0s infinite alternate;
  }

  .sidenavd ul {
    display: flex;
    flex-wrap: nowrap;
  }

  .sidenavd-item {
    flex: 1 0 60px;
  }

  .sidenavd {
    padding: 0 30px;
  }

  .sidenavd-item a {
    margin: 30px 30px 30px 0px;
  }
}

/* CONTENT */

.content {
  grid-area: content;
  margin: 0 auto;
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

/* FOOTER */

.footer {
  grid-area: footer;
  background: linear-gradient(135deg, #1a161333, #F2911B);
}

/* GRID DO CONTENT */

.content {
  display: grid;
  max-width: 900px;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
  padding: 30px;
}

@media (max-width: 600px) {
  .content {
    grid-template-columns: auto;
  }
}


.contentForm {
    display: grid;
    max-width: 1000px;
    grid-template-columns: 1fr 1fr;
    grid-gap: 30px;
    padding-left: 300px;

}
.contentFormLogin {
    display: grid;
    max-width: 500px;
    grid-template-columns: 1fr 1fr;
    grid-gap: 30px;
    padding-left: 300px;

}

@media (max-width: 1000px) {
    .contentForm {
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
.col-wideFormLogin {
    /* A coluna vai do 1 até o último, por isso -1, assim pega todas as colunas */
    grid-column: 1 / -1;
    color: #fff;
}

.imagem-1 {
  /* span 2 significa que ess imagem vai ocupar 2 linhas e será alinhada ao final dela sempre. */
  grid-row: span 2;
  align-self: end;
}

.imagem-2 {
  align-self: end;
}

/* ESTILOS DO CONTENT */

p {
  font-size: 1.2em;
  line-height: 1.6;
  letter-spacing: -.005em;
  color: #fff;
}

.informacoes p+p {
  margin-top: 30px;
}

.titulo {
  color: rgba(251, 255, 0, 0.911);
  margin: 20px;
  padding-left: 340px;
  text-shadow: 0 0 15px #eef21b;

}

.titulo h1 {
  font-size: 3.75em;
  font-weight: 700;
  line-height: 1;
}

.titulo span {
  font-size: 0.875em;
  font-style: italic;
  color: #bbb3c7;
}

/* CARACTERISTICAS */

.caracteristicas {
  display: flex;
  align-items: flex-start;
}

.caracteristicas>div {
  width: 80px;
  text-align: center;
  box-shadow: 5px 5px 15px 0px rgba(44, 44, 44, 0.15);
  background: linear-gradient(135deg,white,white);
  border-radius: 5px;
  position: relative;
}

.caracteristicas>div:first-child {
  margin-right: 30px;
}

.numero {
  color: white;
  font-size: 3em;
  line-height: 1;
  margin: 10px auto;
}

.rotulo {
  background: white;
  border-radius: 0 0 5px 5px;
  color: white;
  padding: 5px 0;
  position: relative;
  top: 2px;
}

.caracteristicas span {
  display: block;
}

/* DESTAQUE */

.destaque {
  font-size: 0.875em;
  color: white;
  max-width: 16em;
}

.citacao,
.atributos {
  align-self: start;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 5px 5px 15px 0px rgba(44, 44, 44, 0.15);
  background: linear-gradient(135deg, #0d01207c, #325573);
}

.citacao p {
  font-size: 1.5em;
  font-style: italic;
  text-align: center;
  max-width: 500px;
  margin: 0 auto;
  color: white;
}

.atributos li {
  color: white;
  font-family: Courier, monospace;
  font-size: 1.125em;
  padding: 15px;
}

.atributos li+li {
  border-top: 2px solid #fff;
}

.footer p {
  color: white;
  text-align: center;
  padding: 30px;
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
    height: 300px;
    border: 1px solid black;
    margin-top: 5px;
    padding: 10px;
    background-color: lightgreen;
}
    /*titulo cadastar*/
    .buttonD {
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px 43px;
        font-size: 20px;
        background: transparent;
        border: 2px solid #eef21b;
        color: #eef21b;
        cursor: pointer;
        border-radius: 50px;
    }

    .buttonD:hover {
        BOX-shadow: 0 0 15px #eef21b, inset 0 0 15px #eef21b;
        text-shadow: 0 0 15px #eef21b;
    }
    /*titulo cadastar*/
    .buttonA {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px 43px;
        font-size: 20px;
        background: #F2911B;
        border: 2px solid #eef21b;
        color: #eef21b;
        cursor: pointer;
        border-radius: 50px;
    }

    .buttonA:hover {
        BOX-shadow: 0 0 15px #eef21b, inset 0 0 15px #eef21b;
        text-shadow: 0 0 15px #eef21b;
    }
    .buttonB {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px 43px;
        font-size: 20px;
        background: #F2911B;
        border: 2px solid #eef21b;
        color: #eef21b;
        cursor: pointer;
        border-radius: 50px;
    }

    .buttonB:hover {
        BOX-shadow: 0 0 15px #eef21b, inset 0 0 15px #eef21b;
        text-shadow: 0 0 15px #eef21b;
    }
    .buttonEnviarCad {
        position: absolute;
        top: 96%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px 43px;
        font-size: 20px;
        background: transparent;
        border: 2px solid #eef21b;
        color: #eef21b;
        cursor: pointer;
        border-radius: 50px;
    }

    .buttonEnviarCad:hover {
        BOX-shadow: 0 0 15px #eef21b, inset 0 0 15px #eef21b;
        text-shadow: 0 0 15px #eef21b;
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
    padding: 10px 140px;
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

form {
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    background-color: #59252E;
    border: 2px solid #ffffff;
    padding: 15px;
    margin: 30px auto;
    width: 750px;
    height: 1250px;
    box-shadow: 5px 10px #F2911B;
    position: absolute;
    transform: translate(-50%, );
    display: flex;
    overflow: hidden;
    border-radius: 20px;
}

.formLogin {
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    background-color: #59252E;
    border: 2px solid #ffffff;
    padding: 15px;
    margin: 30px auto;
    width: 750px;
    height: 300px;
    box-shadow: 5px 10px #F2911B;
    position: absolute;
    transform: translate(-50%, );
    display: flex;
    overflow: hidden;
    border-radius: 20px;
}
</style>
<body>





  <article class="estrutura">
    <header class="header">
      <a href="#" class="logo"><img src="/codigo/img/Ellipse 1.png" alt="Estacionatempo"></a>
      <div class="titulo">
        <h1>EstacionaTempo</h1>
      </div>

    </header>



    <nav class="sidenav">

    </nav>

    <section class="content">
    <img class="imagem-3 col-wide" src="/codigo/img/Rectangle 82.png" alt="Wolf 1" />



      <p class="introducao col-wide">Olá, seja bem-vindo(a)! Quem nunca teve dificuldade em encontrar uma vaga de
        estacionamento disponível, não é mesmo? Pensando nisso, apresentamos o nosso aplicativo de estacionamento, que
        veio para facilitar a vida de motoristas em busca de um lugar para estacionar com praticidade e segurança.</p>
      <img class="imagem-3 col-wide" src="/codigo/img/icones/carro-01 (20).png" alt="Wolf 1" />
      <p class="destaque"></p>


      <p class="introducao col-wide">O projeto foi idealizado e realizado atravéz da percepção que em muitos locais a
        organização dos estacionamentos era inóspita, gerando problemas de concorrência de vaga e definição de
        prioridades de mobilidade, realizando sorteios de vaga a mão entre outras situações; </p>
      <p class="introducao col-wide">
        A nossa plataforma é intuitiva, fácil de usar e oferece diversas vantagens para os usuários, como sorteios de
        vagas, programação de estacionamento recorrente e a comodidade de não precisar mais se preocupar com encontrar
        uma vaga livre. Com o nosso site, estacionar nunca foi tão simples e prático.</p>

      <blockquote class="citacao col-wide">
        <p>Seja um Admistrador:</p>
      </blockquote>

      <ul class="atributos">
        <li>Crie a sua Equipe;</li>
        <li>Adicione participantes;</li>
        <li>Administre as vagas;</li>
        <li>Visualize as proridades;</li>

      </ul>

      <div class="informacoes">
        <p>Ao realizar o cadastro, você pode criar a sua própia equipe, envie o link e permita que os participantes
          sejam sorteados para as vagas pré-determinadas</p>
        <p>Também seja um participante do sorteio caso deseje!</p>
      </div>

      <img class="imagem-3 col-wide" src="/codigo/img/carro-01 (7).jpeg" alt="Wolf" />

      <blockquote class="citacao col-wide">
        <p>Entre em uma Equipe:</p>
      </blockquote>

      <ul class="atributos">
        <li>Entre em uma equipe já existente;</li>
        <li>Defina suas prioridades;</li>
        <li>Requisite e Disponibilize uma vaga;</li>
      </ul>

      <div class="informacoes">
        <p>Após realizar o cadastro você pode entrar em uma equipe pré criada pelo administrador, participe do sorteio e
          da rotação de vagaas sem ficar a cargo de administrar os participantes!!</p>
        <p></p>
      </div>
    </section>

    <aside class="anuncios">

      <nav class="sidenavd">
        <ul>
          <li class="sidenav-item a:hover">
            <a href="/codigo/img/icones/botao-de-inicio.png">
              <img src="/codigo/img/icones/botao-de-inicio.png" alt="Vaca" />
            </a>
          </li>

          <br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br>

          <li class="sidenavd-item">
            <a href="codigo/index/EscolhaUsuAdm.php">
              <img src="/codigo/img/icones/cadastro.png" alt="Cadastro" />
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <footer class="footer">
      <p>Projeto integrador-Senac SBC-2024</p>
    </footer>

  </article>

  <script src="js/script.js"></script>
  </article>

</body>

</html>