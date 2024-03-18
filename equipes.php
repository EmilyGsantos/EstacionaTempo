<?php
  include_once('DAO/dao.php');

  // Consulta da Equipe //
  $sql = "SELECT * FROM Equipe ORDER BY id DESC";
  $resultEquipe = $conexao->query($sql);

 ?>
  
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Space Grotesk', sans-serif;
	text-decoration: none;
}
.team{
	position: relative;
	width: 100%;
	height: 100vh;
	background: radial-gradient(#fff,#0f051d);
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
.team-content{
	width: 100%;
	max-width: 1350px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(150px, auto));
	align-items: center;
	gap: 2rem;
	text-align: center;
	margin-top: 4rem;
}
.team-content img{
	width: 100%;
	height: auto;
	border-radius: 15px;
	margin-bottom: 15px;
}
.center h1{
	color: #fff;
	font-size: 4rem;
	text-align: center;
}
.box{
	padding: 16px;
	background: #fff;
	border-radius: 15px;
	transition: all .38s ease;
}
.box h3{
	font-size: 23px;
	font-weight: 600;
	color: #fff;
	margin-bottom: 8px;
}
.box h5{
	font-size: 15px;
	font-weight: 600;
	color: #b7b4bb;
	margin-bottom: 15px;
	letter-spacing: 2px;
}
.icons i{
	display: inline-block;
	color: #fff;
	font-size: 20px;
	margin: 0 8px;
	transition: all .38s ease;
}
.icons i:hover{
	transform: scale(1.2);
}
.box:hover{
	transform: translateY(-10px);
	cursor: pointer;
}

@media(max-width: 1240px){
	.team{
		width: 100%;
		height: auto;
		padding: 90px 2%;
	}
	.center h1{
		font-size: 3.2rem;
	}
}
</style>
<body>
  
	<section class="team">
		<div class="center">
			<h1>Edite sua Equipe</h1>
		</div>

			<div class="box">
				<img src="/codigo/img/icones/usuario.png">
				<h3>Estacionatempo</h3>
				<h5>Senac</h5>
        <tbody>
    <!--Retorna TODAS AS EQUIPES Criadas pelos Administradores Aqui estão os nomes das Equipes Criadas e o icone de atualizar --->
    <?php 
        while($equipes_see = mysqli_fetch_assoc($resultEquipe)) 
          {
            echo "<tr>";
                      echo "<td>".$equipes_see['nome_equipe']."</td>";               
                      echo "<td>
                            <a class='bnt bnt-primary' href='edicaoEquipes.php?id=$equipes_see[id]'> 
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class= 'bi bi-pencil-square' viewBox='0 0 16 16'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'>
                              </svg>
                          <a/>
                      </td>";
            echo "<tr>";
          }// fim do while 
        ?>
    </tbody> 
			</div>

		</div>

	</section>

</body>
</html>

   

