
<?php
/// Arrumar
    // Validação de Login///
     /*session_start();
     include_once('DAO/dao.php');

     // Validação de Login //
     if((!isset($_SESSION['emailADM']) == true) and (!isset($_SESSION['senhaADM']) == true))// !isset- se nao existir uma varivael email na minha sessão e ..
        { 
    
          unset($_SESSION ['emailADM']); // unset  destruir os dados que nao existem 
          unset($_SESSION ['senhaADM']);
          header('Location: loginAdm.php');
        }
      **/
?>



<!--Tela do  Administrador--->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="sidebar-main-ADM/src/css/style.css"><!--arrumar link certo-->
    <title>Index</title>
</head>
<body>

    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <img src="images/Ellipse 1.png" id="user_avatar" alt="Avatar">
    
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
                <li class="side-item">
                    <a href="index/ListaDeUsuarios.php">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Equipe
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
            <h1>EstacionaTempo</h1>
          </div>
       
          <section class="contentFormReserva">


            <form class="col-wideForm">


                <p class="destaque"></p>
                <div class="informacoes">
                    <h4>
                        <label for="email">Nome da Tarefa (Que será disponibilizada)</label>
                            <input label type="text" id="Senha" name="Senha" required><br>

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
    </main>
    <script src="script.js"></script><!--Arrumar link-->
    
    <header class="cabecalho">
 
        <nav class="cabecalho-nav">
            
        </nav>
    </header>

    
</body>
</html>