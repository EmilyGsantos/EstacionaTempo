
<!--LISTA de Todos os Usuários cadastrados onde o ADM poderá Consultar os dados dos participantes-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/codigo/css/GerenciamentoPa.css">
        
        <title>GerenciamentoDeParticipantes</title>

        <!-- CSS only -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body class="container" style="background-color: #052244;">
        

        <div class="card card-body mt-5">
            
            <h1>Gerenciamento de Participantes</h1>
            <hr>
            <div class="continue-button">
                <button><a href="/codigo/index/SolicitaçõesAdm.php">Voltar a Home</a> </button>
            </div>
            <input id="input-busca" type="text" class="form-control mt-3 mb-3" placeholder="O que você procura?">

            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Idade</th>
                        <th>Veiculo</th>
                        <th>Cor</th>
                        <th>Placa</th>
                        <th>Email</th>
                        <th>Prioridade</th>        
                    </tr>
                </thead>
                <tbody id="tabela-bebidas">
                   <?php
                            include_once('../DAO/dao.php');

                            // Consulta dos dados do usuario //
                            $sql = "SELECT id,nome, idade, telefone, veiculo, cor, placa, email,prioridades FROM Usuario ";                
                            $result = mysqli_query($conexao, $sql);
                    
                    
                            if(mysqli_num_rows($result)){
                                
                            // o while informa que o bloco de codigo deve ser repetido enquanto a condição for vdd.
                            while($row = mysqli_fetch_assoc($result)) // fetch_assoc - serve p retornar uma matriz sociativa 
                            {  "<table class='table table-hover table-striped'>";
                                    echo "<th>ID:".$row['id']."</th><br>",
                                    "<th>".$row['nome']."</th><br>",
                                    "<th>".$row['idade']."</th><br>",
                                    "<th>".$row['telefone']."</th><br>",
                                    "<th>".$row['veiculo']."</th><br>",
                                    "<th>".$row['cor']."</th><br>",
                                    "<th>".$row['placa']."</th><br>",
                                    "<th>".$row['email']."</th><br>",
                                    "<th>".$row['prioridades']."</th>";
                    
                                    // passando o id do usuario para retirar no href 
                            }// fim do while
                                
                                
                            }else{
                                echo "Zero resultados";
                            }

                   ?>
                </tbody>
            </table>
        </div>
    
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="/codigo/index/script.js"></script>

    </body>
</html>