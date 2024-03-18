<?php
        //conexao com o banco de dados 
         $Host = 'localhost';
         $user = 'root';
         $password = '';
         $name = 'EstacionaTempo';

         $conexao = new mysqli($Host, $user, $password, $name); //passando os parametros do banco de dados 

            //checando a conexao com o banco de dados
            if($conexao->connect_error)
            {
                echo "NAO CONECTADO!";
            }else{
                echo ""; // conectado
            }


?>