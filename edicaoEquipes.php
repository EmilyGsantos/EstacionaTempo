<?php
  //Editar Equipes //    
  if(!empty($_GET['id']))
  {
      include_once('DAO/dao.php');
      
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
    }// fim do if Editar equipe
  ?>

<!--Formulario  da Equipe p/ enviar p o Atualizar -->
 <div class="form">
      <form method="POST" action="saveE.php">
        <div class="input-group">
                <div class="input-box">
                  <label for="car">Nome da equipe</label>
                    <input  type="text" id="nome_equipe" name="nome_equipe" value="<?php echo $nomeequipe ?>" >
                </div>

                <div class="input-box">
                  <label for="car">Numero de vagas do estacionamento</label>
                  <input  type="text" id="qntvaga" name="qntvaga" value="<?php echo  $qntvagas?>" >
                </div>
            </div>

              <div class="input-box">
                <label for="car">Numero de vagas Fixas Parciais</label>
                <input  type="text" name="qntParciais" id="qntParciais" value="<?php echo  $qntParciais ?>" >
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>"></input> 
        </div>
        <input type="submit" name="updateEquipe" id="updateEquipe">
    </form>
 </div>
 