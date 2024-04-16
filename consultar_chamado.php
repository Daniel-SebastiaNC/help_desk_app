<?php require_once "validador_acesso.php" ?>

<?php 
  $calls = array();
  $file = fopen("arquivo.hd", "r");

  while(!feof($file)) {
    $resgister = fgets($file);
    $calls[] = $resgister;
  }

  fclose($file);
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php  include "views/header.php";?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

            
            <?php 
              foreach ($calls as $call) {
                $conteud = explode("*§§*", $call);

                if ($_SESSION['permision'] == 2){
                  if($_SESSION['id'] != $conteud[0]){
                    continue;
                  }
                }

                if (count($conteud) < 3) {
                  continue;
                }
              
            ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$conteud[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$conteud[2]?></h6>
                  <p class="card-text"><?=$conteud[3]?></p>

                </div>
              </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <button class="btn btn-lg btn-warning btn-block" type="submit" onclick="history.back()">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>