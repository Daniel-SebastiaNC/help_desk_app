<?php 

    session_start();
    
    $usersCadastrados = array(
        array("id" => 1,"email" => "teste@dev.com", "senha" => "1234", "permision" => 1),
        array("id" => 2,"email" => "user@dev.com", "senha" => "1234", "permision" => 2)
    );

    $email = $_POST['email'] ?? "";
    $senha = $_POST['senha'] ?? "";

    $autentificador = false;
    $user_id = null;
    $user_permision = null;
    $perfil = array(1 => "adim", 2 => "user");

    foreach ($usersCadastrados as $user) {
        if ($email == $user['email'] && $senha == $user['senha']){
            $autentificador = true;
            $user_id = $user['id'];
            $user_permision = $user['permision'];
        }
        
    }

    if ($autentificador) {
        $_SESSION['autentico'] = "SIM";
        $_SESSION['id'] = $user_id;
        $_SESSION['permision'] = $user_permision;
        header("Location: home.php");
    } else {
        $_SESSION['autentico'] = "NAO";
        header("Location: index.php?login=erro");
    }
    
    
    
?>