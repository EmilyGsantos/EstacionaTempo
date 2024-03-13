<?php
     session_start();
     include_once('dao.php');

     if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))// !isset- se nao existir uma varivael email na minha sessão e ..
        { 
    
          unset($_SESSION ['email']); // unset  destruir os dados que nao existem 
          unset($_SESSION ['senha']);
          header('Location: login.php');
        }
      $logado = $_SESSION['email'];
  
      
    // Consulta dos dados para o user ver  
    $sql = "SELECT * FROM Usuario ORDER BY id DESC";
    $resultado = $conexao->query($sql);

      
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1> Bem-Vindo(a) <ul>$logado</ul></h1>";
    ?>

 <a href="sair.php">Sair</a>
 <a href="equipes.php">Equipes</a>
 <div>
        <table>
            <thead>
                <tr>
                   <th>Nome</th>
                   <th>telefone</th>
                   <th>cpf</th>
                   <th>idade</th>
                   <th>cor</th>
                   <th>placa</th>
                   <th>prioridade</th>
                   <th>Email</th>
                   <th>Senha</th>
                   <th>veiculo</th>
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
                         echo "<td>".$user_data['cor']."</td>";              
                         echo "<td>".$user_data['placa']."</td>";
                         echo "<td>".$user_data['prioridades']."</td>";
                         echo "<td>".$user_data['email']."</td>";
                         echo "<td>".$user_data['senha']."</td>";
                         echo "<td>".$user_data['veiculo']."</td>";
                         // passando o id do usuario para atualizar no href 
                         echo "<td>
                                <a class='bnt bnt-primary' href='edicao.php?id=$user_data[id]'> 
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class= 'bi bi-pencil-square' viewBox='0 0 16 16'>
                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'>
                                    </svg>
                                <a/>
                                <a class='bnt bnt-primary' href='delete.php?id=$user_data[id]'> 
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class= 'bi bi-pencil-square' viewBox='0 0 16 16'>
                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'>
                                    </svg>
                                <a/>
                                </td>";
                    echo "<tr>";
                   }
                ?>
            </tbody>
        </table>
    </div> 

    <?php

      /// Gerador de Números //
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
</body>
</html>

