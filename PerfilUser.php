

<?php
    //Retornando os dados cadastrados do usuário para ele edita-los ou exluir sua conta //
    include_once('DAO/dao.php');
   
       // Consulta dos dados para o user ver  
       $sql = "SELECT * FROM Usuario ORDER BY id DESC";
       $resultado = $conexao->query($sql);
   
   ?>
   
   <!DOCTYPE html>
   <html lang="pt-br">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="/codigo/css/styleUsuario.css">
       <title>Perfil</title>
   </head>
<body>

    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
            <a href="#" class="logo"><img src="/codigo/img/Ellipse 1.png" alt="Estacionatempo"></a>
    
                <p id="user_infos">
                    <span class="item-description">
                        Usuário
                    </span>
                    <span class="item-description">
                        Bem-vindo(a)
                    </span>
                </p>
            </div>
    
           
                

                <li class="side-item ">
                    <a href="sistema.php">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Início<br>
        
                        </span>
                    </a>
                </li>

               
                <li class="side-item active">
                    <a href="#">
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
                <h1>EstacionaTempo</h1>
              </div>
              <section class="content">
        
                <p class="destaque"></p>
            </section>
            <section class="contentFormReserva">
    <form >
     
                           
                            <?php // o while informa que o bloco de codigo deve ser repetido enquanto a condição for vdd.
                              while($user_data = mysqli_fetch_assoc($resultado)) // fetch_assoc - serve p retornar uma matriz sociativa 
                               {
                                    echo "<tr>";
                                    echo "<td>ID:" .$user_data['id']."</td><br>";
                                     echo "<td>Nome:" .$user_data['nome']."</td><br>";
                                     echo "<td>Celular:" .$user_data['telefone']."</td><br>";
                                     echo "<td>Cpf:" .$user_data['cpf']."</td><br>";
                                     echo "<td>Idade".$user_data['idade']."</td><br>";
                                     echo "<td>Veiculo:".$user_data['veiculo']."</td><br>";
                                     echo "<td>Cor:".$user_data['cor']."</td><br>";              
                                     echo "<td>Placa:".$user_data['placa']."</td><br>";
                                     echo "<td>Prioridade:".$user_data['prioridades']."</td><br>";
                                     echo "<td>Email:".$user_data['email']."</td><br>";
                                     echo "<td>Senha:".$user_data['senha']."</td><br>";
                                     // passando o id do usuario para atualizar no href 
                                     echo "<td>
                                            <a class='bnt bnt-primary' href='edicao.php?id=$user_data[id]'> 
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class= 'bi bi-pencil-square' viewBox='0 0 16 16'>
                                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'>
                                                </svg>
                                            <a/>
                                            <a class='bnt bnt-primary' href='delete.php?id=$user_data[id]'> 
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                            </svg>
                                            <a/>
                                            </td>";
                                echo "<tr>";
                               }
                            ?>
            
            </form>
        </main>
      
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/codigo/index/script.js"></script>        
    <header class="cabecalho">

        
        <nav class="cabecalho-nav">

            
    </header>
    </body>
    </html>


