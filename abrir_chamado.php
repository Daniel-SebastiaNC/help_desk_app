<?php require_once "validador_acesso.php" ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action=" resistra_chamado.php ">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <button class="btn btn-lg btn-warning btn-block" onclick="backs()" type="button" id="backBtn">Voltar</button>
                      </div>

                      <div class="col-6">
                        <button name="submit" class="btn btn-lg btn-info btn-block" type="submit"  onclick="submits()">Abrir</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <script>
      let cont = history.length - 3;
      //alert(cont)
      
      
      /*
      function submits() {
        
        
        let cont = localStorage.getItem("cont")
        if (cont == null) {
          localStorage.setItem("cont", 2);
        } else {
          cont++;
          localStorage.setItem("cont", cont);
        } 
      }*/

      function backs() {
        /*
        let cont = localStorage.getItem("cont")
        alert(cont);
        localStorage.removeItem("cont");
          */
        window.history.go(-cont);
      }

      

      
      
    </script>
  </body>
</html>