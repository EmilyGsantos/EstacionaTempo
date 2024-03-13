<?php
  //Editar Equipes //    
  if(!empty($_GET['id']))
  {
      include_once('dao.php');
      
          $id = $_GET['id'];
          $sqlSelect = "SELECT * FROM Equipe WHERE id=$id";

          $result = $conexao->query($sqlSelect);

          if($result->num_rows > 0)
           {
              while($equipes_see = mysqli_fetch_assoc($result))
              {
                    $nomeequipe = $equipes_see['nome_equipe'];
                    $qntvagas = $equipes_see['qntvaga'];
                    $qntParciais =$equipes_see ['qntParciais'];
              }// fim do while

            } // fim do while
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <form method="POST" action="saveE.php">
            <label>Nome da Equipe:</label>
            <input label type="text" id="nome_equipe" name="nome_equipe" value="<?php echo $nomeequipe ?>" ><br><br>

            <label >Quantidade de vagas</label>
            <input label type="text" id="qntvaga" name="qntvaga" value="<?php echo  $qntvagas?>" ><br><br>
            
            <label >Quantidade de vagas Fixas Parciais</label>
            <input label type="text" id="qntParciais" name="qntParciais" value="<?php echo  $qntParciais ?>" ><br><br>

            <input type="hidden" name="id" value="<?php echo $id ?>"></input> 
            <br>
            <input type="submit" name="updateEquipe" id="updateEquipe">

  </form>
    </body>
    </html>