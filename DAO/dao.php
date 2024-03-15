<?php
        //conexao com o banco de dados 
         $dbHost = 'localhost';
         $dbuser = 'root';
         $dbpassword = '';
         $dbname = 'EstacionaTempo';

         $conexao = new mysqli($dbHost, $dbuser, $dbpassword, $dbname); //passando os parametros do banco de dados 

            //checando a conexao com o banco de dados
            if($conexao->connect_error)
            {
                echo "NAO CONECTADO!";
            }else{
                echo "conectado!";
            }


?>