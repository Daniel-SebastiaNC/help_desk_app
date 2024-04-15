<?php 
  session_start();

  if (!isset($_SESSION['autentico']) || $_SESSION['autentico'] != "SIM" ) {
    header("Location: index.php?login=erro2");
  }
  
?>