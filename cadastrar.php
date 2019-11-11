<?php include 'topo.php'?>

<!-- jumbotron -->
  <div class="jumbotron">
           <h1 class="display-4">Cadastro de Produtos</h1>
    <form class="form-horizontal" action="inserir.php" method="POST" >
        <fieldset>
      <!-- Form Name -->
      <!-- <legend>Cadastro de produto : </legend> -->
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="produto">Produto : </label>  
        <div class="col-md-4">
        <input id="produto" name="produto" type="text" placeholder="Insira o nome do produto" class="form-control input-md" required="">
        <span class="help-block">Ex: Coca, Fanta, Skol</span>  
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="valor">Valor : </label>  
        <div class="col-md-4">
        <input id="valor" name="valor" type="text" placeholder="Insira o valor do produto" class="form-control input-md" required="">
        <span class="help-block">2.5</span>  
        </div>
      </div>
      
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="submit" type="submit" name="submit" class="btn btn-primary">Inserir</button>
        </div>
      </div>
      </fieldset>
    </form>
  </div>
<!-- fim jumbotron -->
</body>
</html>