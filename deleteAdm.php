<?php
 // Deletar conta do Adm 
if(!empty($_GET['id']))
    {
        include_once('DAO/dao.php');
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM Administrador WHERE id=$id";

        $resultado = $conexao->query($sqlSelect);

        if($resultado->num_rows > 0)
        {
            $sqlDelete = "DELETE  FROM Administrador WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }

    header('Location:LoginAdm.php')


?>