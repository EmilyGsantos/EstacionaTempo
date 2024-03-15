<?php
 //Retornando os dados cadastrados do usuário para ele edita-los ou exluir sua conta //
 include_once('DAO/dao.php');

    // Consulta dos dados para o user ver  
    $sql = "SELECT * FROM Usuario ORDER BY id DESC";
    $resultado = $conexao->query($sql);

?>


<!--Perfil do Usuário-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/NovoPHPEstacionamento/sidebar-main-ADM/src/css/style.css">
    <title>Perfil</title>
</head>
<body>

    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <img src="/NovoPHPEstacionamento/sidebar-main-ADM/src/images/Ellipse 1.png" id="user_avatar" alt="Avatar">
    
                <p id="user_infos">
                    <span class="item-description">
                        
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

                <li class="side-item active">
                    <a href="#">
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

                <li class="side-item">
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
       
        <div>
        <table>
            <thead>
                <tr>
                   <th>Nome</th>
                   <th>Telefone</th>
                   <th>Cpf</th>
                   <th>Idade</th>
                   <th>Veiculo</th>
                   <th>Cor</th>
                   <th>Placa</th>
                   <th>Prioridade</th>
                   <th>Email</th>
                   <th>Senha</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php // o while informa que o bloco de codigo deve ser repetido enquanto a condição for vdd.
                   while($user_data = mysqli_fetch_assoc($resultado)) // fetch_assoc - serve p retornar uma matriz sociativa 
                   {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                         echo "<td>".$user_data['nome']."</td>";
                         echo "<td>".$user_data['telefone']."</td>";
                         echo "<td>".$user_data['cpf']."</td>";
                         echo "<td>".$user_data['idade']."</td>";
                         echo "<td>".$user_data['veiculo']."</td>";
                         echo "<td>".$user_data['cor']."</td>";              
                         echo "<td>".$user_data['placa']."</td>";
                         echo "<td>".$user_data['prioridades']."</td>";
                         echo "<td>".$user_data['email']."</td>";
                         echo "<td>".$user_data['senha']."</td>";
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
            </tbody>
        </table>
    </div> 
      
          
    </main>

    <script src="/NovoPHPEstacionamento/sidebar-main-ADM/src/javascipt/cccc.js"></script>

    
    <header class="cabecalho">
        
        <nav class="cabecalho-nav">
        </nav>
        
    </header>

    
</body>
</html>