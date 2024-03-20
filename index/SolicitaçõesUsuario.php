<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/codigo/css/styleUsuario.css">
    <title>Solicitações Usuario</title>
</head>

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
                    <a href="#">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Solicitações
                        </span>
                    </a>
                </li>
           

                <li class="side-item ">
                    <a href="ReservarVagaUsuario.php">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Reserva de<br>
                            vaga
                        </span>
                    </a>
                </li>

                <li class="side-item ">
                    <a href="DisponibilizarVagaUsuario.php">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Disponibilizar<br>
                            vaga
                        </span>
                    </a>
                </li>
                <li class="side-item ">
                <a href="/codigo/PerfilUser.php">
                        <i class="fa-solid fa-user"></i>
                        <span class="item-description">
                            Perfil
                        </span>
                    </a>
                </li>
                
            </ul>
                
            </ul>
    
            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <a href="sair.php">
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

        <p class="destaque">
        <div class="titulo">
            <h1>EstacionaTempo</h1>
            <button class="buttonD" onclick="toggle('conteudo')">Enviar e aguardar o retorno</button>
        </div>
        </p>

        <section class="contentFormReserva">


            <form class="col-wideForm">


                <p class="destaque"></p>
                <div class="informacoes">
                    <h4>
                        
                        <label for="assunto"><b>Dia da semana que há vagas disponiveis</b></label>
                        <select name="assunto" id="assunto">
                            <option value="reclamação"><a href="/Teste/wildbeast-inicio copy/index.html">Final de Semana</option>
                            </a>
                            <option value="dúvida">Segunda</option>
                            <option value="dúvida">Terça</option>
                            <option value="dúvida">Quarta</option>
                            <option value="dúvida">Quinta</option>
                            <option value="dúvida">Sexta</option>
                        </select><br><br>
                        <label for="assunto"><b>Horários disponiveis para reserva</b></label>
                        <select name="assunto" id="assunto">
                            <option value="reclamação"><a href="/Teste/wildbeast-inicio copy/index.html">Matutino</option>
                            </a>
                            <option value="dúvida">Vespertino</option>
                            <option value="dúvida">Noturno</option>
                            
                        </select><br>
                       
                    </h4>
                </div>

            </form>
            <div class="relogio">
                <div>
                    <span id="horas">00</span>
                    <span class="tempo">Horas</span>
                </div>

                <div>
                    <span id="minutos">00</span>
                    <span class="tempo">Minutos</span>
                </div>

                <div>
                    <span id="segundos">00</span>
                    <span class="tempo">Segundos</span>
                </div>

            </div>

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