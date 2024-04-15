<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php  include "views/header.php";?>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha" name="senha">
                </div>
                <?php if((isset($_GET['login'])) && ($_GET['login'] == "erro")) {  
                  echo '
                  <div class="text-danger"> 
                    Usuário ou senha inválido(s)
                  </div>';
                } ?>
                <?php if((isset($_GET['login'])) && ($_GET['login'] == "erro2")) {  
                  echo '
                  <div class="text-danger"> 
                    Faça o Login antes
                  </div>';
                } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>