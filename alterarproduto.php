<?php 
include 'topo.php';
include './backend/conexao.php';
// pega id
$idproduto = $_GET['id'];

$query = "Select * from produtos where id_produto ='$idproduto'";
$result = mysqli_query($link, $query);
$linha = mysqli_fetch_array($result);

$GLOBALS['id_produto'] = $linha[0];
$GLOBALS['nome'] = $linha[1];
$GLOBALS['valor'] = $linha[2];

?>
<!-- jumbotron -->
<div class="jumbotron">
           <h1 class="display-4">Alterar Produto</h1>
    <form class="form-horizontal" action="altera.php?id=<?php echo $idproduto;?>" method="POST" >
        <fieldset>
      <!-- Form Name -->
      <!-- <legend>Cadastro de produto : </legend> -->
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="produto">Produto : </label>  
        <div class="col-md-4">
        <input id="produto" name="produto" type="text" value="<?php echo $nome; ?>" class="form-control input-md" required="">
        <span class="help-block">Ex: Coca, Fanta, Skol</span>  
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="valor">Valor : </label>  
        <div class="col-md-4">
        <input id="valor" name="valor" type="text" value="<?php echo $valor; ?>" class="form-control input-md" required="">
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