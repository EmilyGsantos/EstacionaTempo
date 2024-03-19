<?php
 // TESTE DO LOGIN DO ADM //
    if(isset($_POST['submitA']) && !empty($_POST['emailADM']) && !empty($_POST['senhaADM'])){ //!empyt -nao estiver vazia 

    include_once('DAO/dao.php');

    $emailA = $_POST['emailADM'];
    $senhaA = $_POST['senhaADM'];
    //verificando se os dados que inseri no login são iguais aos que estao la no banco de dados na qual passei atraves do cadastro 
    $sql = "SELECT * FROM Administrador WHERE emailADM = '$emailA' and senhaADM = '$senhaA'";
    $result = $conexao->query($sql); //query - requisitando os dados do banco atraves da variavel sql 


    if(mysqli_num_rows($result) < 1){   // mysqli_num_rows n de linhas
        unset($_SESSION ['emailADM']);
        unset($_SESSION ['senhaADM']);
        echo "Login e senha não encontrados no sistema"; // se nao existir 
    }else{
        $_SESSION['emailADM'] = $emailA;
        $_SESSION['senhaADM'] = $senhaA;
        header('Location: sistemaAdm.php');
    }
    }// fim do if teste login admnistrador 
?>