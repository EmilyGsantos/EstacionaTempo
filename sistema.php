<?php
     // Tela  do Participante//
     session_start();
     include_once('DAO/dao.php');

     // Validação de Login //
     if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))// !isset- se nao existir uma varivael email na minha sessão e ..
        { 
    
          unset($_SESSION ['email']); // unset  destruir os dados que nao existem 
          unset($_SESSION ['senha']);
          header('Location: login.php');
        }
      $logado = $_SESSION['email'];
  
?>

<!--Perfil do Usuário -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/NovoPHPEstacionamento/USUARIO/sidebar-main/src/css/styles.css">
    <title>Perfil do Usuário</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <img src="src/images/Ellipse 1.png" id="user_avatar" alt="Avatar">
    
                <p id="user_infos">
                    <span class="item-description">
                        usuário
                    </span>
                    <span class="item-description">
                        <?php
                        echo "<h1> Bem-Vindo(a) <ul>$logado</ul></h1>";
                        ?>
                    </span>
                </p>
            </div>
    
            <ul id="side_items">
                <li class="side-item active">
                    <a href="index.php">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Inicio
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a href="DesistenciaVga.php">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Desistência de<br>
                            vaga
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="PerfilUser.php">
                        <i class="fa-solid fa-user"></i>
                        <span class="item-description">
                            Perfil
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="ReservaVaga.php">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Reserva de<br>
                            vaga
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="disponibilizar.phpp">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Disponibilizar<br>
                            vaga
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
            <h1>EstacionaTempo</h1><br>
            <img src="src/images/Rectangle 82.png" alt="Avatar">
            <div class="continue-button">
                <button><a href="#"">Ver Lista de Usuários</a> </button>
            </div>
    
          </div>
          <section class="content">
            
        </section>

    </main

    <!--GERADOR DE VAGAS Aleátorias-->
    <?php
       /// Gerador de Números(Vagas) //
        include_once('dao.php');

        $sql = "SELECT qntvaga FROM Equipe";
        $result = $conexao->query($sql);

        while($dados = mysqli_fetch_Array($result))
        {
           $numero = $dados['qntvaga'];
            $gera = rand(1, $numero); // rand - função que gera números  aleatórios 
                        
        }
        echo("A vaga gerada foi $gera");     
    ?>
>
    <script src="src/javascript/script.js"></script>
    
    <header class="cabecalho">

        
        <nav class="cabecalho-nav">
            
           
        </nav>
    </header>

    


  


