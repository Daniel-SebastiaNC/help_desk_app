<?php 
    session_start();

    $title = $_POST['titulo'];
    $category = $_POST['categoria'];
    $descripition = $_POST['descricao'];
    $id = $_SESSION['id'];

    $lsit = array($id, $title, $category, $descripition);
    $string = implode('*§§*', $lsit);
    $data = $string. PHP_EOL;

    $file = fopen("arquivo.hd", 'a');

    fwrite($file, $data);
    fclose($file);

    header("Location: abrir_chamado.php");
  ?>