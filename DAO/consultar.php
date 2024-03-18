<?php
class Consultar{
    public function Consultar() {
      
        include_once('DAO/dao.php');

        // Consulta dos dados do usuario //
        $sql = "SELECT * FROM Usuario ORDER BY nome DESC";                
        $resultado = $conexao->query($sql);

        // o while informa que o bloco de codigo deve ser repetido enquanto a condição for vdd.
        while($user_data = mysqli_fetch_assoc($resultado)) // fetch_assoc - serve p retornar uma matriz sociativa 
        {
            echo $user_data['id'],
                $user_data['nome'],
                $user_data['telefone'],
                $user_data['idade'],
                $user_data['veiculo'],
                $user_data['cor'],              
                $user_data['placa'],
                $user_data['email'],
                $user_data['prioridades'];
            // passando o id do usuario para atualizar no href 
            echo " <button class='btn btn-sm btn-warning'><a href='delete.php?id=$user_data[id]'><a/></button>";
        }
    }
}
?>