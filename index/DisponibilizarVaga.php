<!--Adm--->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/NovoPHPEstacionamento/sidebar-main-ADM/src/css/style.css">
    <title>Disponibilizar Vaga Administrador</title>
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
                <li class="side-item ">
                    <a href="Solicitações.php">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Solicitações
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a href="equipes.php">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Equipe
                        </span>
                    </a>
                </li>

                <li class="side-item ">
                    <a href="Perfil.php">
                        <i class="fa-solid fa-user"></i>
                        <span class="item-description">
                            Perfil
                        </span>
                    </a>
                </li>

                <li class="side-item ">
                    <a href="ReservarVaga.php">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Reserva de<br>
                            vaga
                        </span>
                    </a>
                </li>

                <li class="side-item active">
                    <a href="DisponibilizarVAGA.php">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Disponibilizar<br>
                            vaga
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a href="Comentários.php">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Comentarios
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
            <div class="titulo">
                <h1>EstacionaTempo</h1>
              </div>
              <section class="content">
        
                <p class="destaque"></p>
            </section>
            <section class="contentFormReserva">
    
    
                <form class="col-wideForm">
    
    
                    <p class="destaque"></p>
                    
                    
                    <div class="informacoes">
                        <h4>
                            
                            <label for="assunto"><b>Dia da semana que irá disponibilizar</b></label>
                            <select name="assunto" id="assunto">
                                <option value="reclamação"><a href="/Teste/wildbeast-inicio copy/index.php">Final de Semana</option>
                                </a>
                                <option value="dúvida">Segunda</option>
                                <option value="dúvida">Terça</option>
                                <option value="dúvida">Quarta</option>
                                <option value="dúvida">Quinta</option>
                                <option value="dúvida">Sexta</option>
                                <option value="dúvida">Todos</option>
                            </select><br><br>
                            <label for="assunto"><b>Escolha o horário para disponibilizar</b></label>
                            <select name="assunto" id="assunto">
                                <option value="reclamação"><a href="/Teste/wildbeast-inicio copy/index.php">Matutino</option>
                                </a>
                                <option value="dúvida">Vespertino</option>
                                <option value="dúvida">Noturno</option>
                                <option value="dúvida">Todos os Reservados</option>
                                
                            </select><br><br>
                            <label for="assunto" placeholder="Digite a quantidade"><b>Periodo que a tornará disponivel</b></label>
                            <select name="assunto" id="assunto">
                                <option value="reclamação"><a href="/Teste/wildbeast-inicio copy/index.php">Periodo de 3 a 7 dias</option>
                                </a>
                                <option value="dúvida">1 dia</option>
                                <option value="dúvida">2 dias</option>
                                <option value="dúvida">3 dias</option>
    
                            </select><br><br>
                           
                        </h4>
                        <div class="gender-inputs">
                            <h2><div class="gender-title">
                                <h6>Deseja mesmo disponibilizar a vaga?</h6>
                            </div></h2>
            
                            <div class="gender-group">
                                <div class="gender-input">
                                    <input id="female" type="radio" name="gender">
                                    <label for="female"></label>
                                </div>
            
                                
                            </div>
                        </div>
                    </div>
    
                </form>
                <div class="continue-button">
                    <button><a href="#">Enviar</a> </button>
                </div>
                <div class="relogio">
                    <div>
                        <span id="horas">13</span>
                        <span class="tempo">Vaga</span>
                    </div>
    
                    <div>
                        <span id="">Seg</span>
                        <span class="tempo">Dia da semana</span>
                    </div>
    
                    <div>
                        <span id="">Man</span>
                        <span class="tempo">Periodo</span>
                    </div>
    
                </div>
                
            </section>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="/codigo/index/script.js"></script>        
        <header class="cabecalho">
    
            
            <nav class="cabecalho-nav">
    
                
        </header>
    
        
    </body>
    </html>