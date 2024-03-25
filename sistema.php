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
  
?>




<!--Perfil do Usuário -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<<<<<<< HEAD
    <link rel="stylesheet" href="/codigo/css/styleSitema.css">
=======
    <link rel="stylesheet" href="/codigo/css/styleUsuario.css">
>>>>>>> 70dd13611c1f5bed4c3bdaeb0f3d17dbdf5d238f
    <title>Sistema Usuario</title>
</head>

<body>
    <nav id="sidebar">
        <div id="sidebar_content">
                    <span class="item-description">
                        <?php
                        echo "<h1> Bem-Vindo(a) <ul>Usuário</ul></h1>";
                        ?>
                    </span>
            
    
            <ul id="side_items">
                <li class="side-item active">
                    <a href="#">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            Inicio
                        </span>
                    </a>
                </li>
               
    
               
    
                
                <li class="side-item">
<<<<<<< HEAD
=======
                    <a href="index\ReservarVagaUsuario.php">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Reserva de<br>
                            vaga
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="index/DisponibilizarVagaUsuario.php">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Disponibilizar<br>
                            vaga
                        </span>
                    </a>
                </li>
                <li class="side-item">
>>>>>>> 70dd13611c1f5bed4c3bdaeb0f3d17dbdf5d238f
                    <a href="PerfilUser.php">
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
            <img src="/codigo/img/Rectangle 82.png" alt="Avatar">
           
            <?php
            /// Gerador de Números(Vagas) //
                include_once('DAO/dao.php');

                $sql = "SELECT qntvaga FROM Equipe";
                $result = $conexao->query($sql); //query-pedido de uma informação ou de um dado.

<<<<<<< HEAD
              

                while($dados = mysqli_fetch_Array($result))
                {
                    $numero = $dados['qntvaga'];
                    $gera = rand(1, $numero); // rand - função que gera números  aleatórios    
     
                }
                echo("A vaga gerada foi $gera");   
=======
                while($dados = mysqli_fetch_Array($result))
                {
                    $numero = $dados['qntvaga'];
                    $gera = rand(1, $numero); // rand - função que gera números  aleatórios 
                                
                }
                echo("A vaga gerada foi $gera");     
>>>>>>> 70dd13611c1f5bed4c3bdaeb0f3d17dbdf5d238f
           ?>
          </div>
          <section class="content">
            
        </section>

    </main>

  

    <script src="src/javascript/script.js"></script>
    
    <header class="cabecalho">

        
        <nav class="cabecalho-nav">
            <br><br>
            <!--Gerador de Numeros-->

        </nav>


    </header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/codigo/index/script.js"></script>
       
    </div>
    </body>
</html>
    


  


