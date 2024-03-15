<?php
 // deletar um usuário do sistema 

 if(!empty($_GET['id']))
    {
        include_once('DAO/dao.php');
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM Usuario WHERE id=$id";

        $resultado = $conexao->query($sqlSelect);

        if($resultado->num_rows > 0)
        {
            $sqlDelete = "DELETE  FROM Usuario WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }

    header('Location:sistema.php')

?>