<?php 

    session_start();
    
    $usersCadastrados = array(
        array("email" => "teste@dev.com", "senha" => "123456"),
        array("email" => "user@dev.com", "senha" => "abcd")
    );

    $email = $_POST['email'] ?? "";
    $senha = $_POST['senha'] ?? "";

    $autentificador = false;

    foreach ($usersCadastrados as $user) {
        if ($email == $user['email'] && $senha == $user['senha']){
            $autentificador = true;
        }
        
    }

    if ($autentificador) {
        $_SESSION['autentico'] = "SIM";
        header("Location: home.php");
    } else {
        $_SESSION['autentico'] = "NAO";
        header("Location: index.php?login=erro");
    }
    
    
    
?>