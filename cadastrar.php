<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

    <!-- topo -->
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
      <a class='navbar-brand' href='index.html'>PROJETO PHP</a>
         <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarText' aria-controls='navbarText' aria-expanded='false' aria-label='Toggle navigation'>
           <span class='navbar-toggler-icon'></span>
         </button>
         <div class='collapse navbar-collapse' id='navbarText'>
           <ul class='navbar-nav ml-auto'>
             <li class='nav-item active'>
               <a class='nav-link' href='produtos.php'>Visualizar Produtos <span class='sr-only'>(current)</span></a>
             </li> 
             <li class='nav-item active'>
               <a class='nav-link' href='cadastrar.php'>Cadastrar Produtos <span class='sr-only'>(current)</span></a>
             </li>
             <li class='nav-item'>
               <a class='nav-link' href='vendas.php'>Vendas</a>
             </li>
             <li class='nav-item'>
               <a class='nav-link' href='relatorios.php'>Relatórios</a>
             </li>
           </ul>
         </div>
      </nav>
    <!-- fim topo -->

    <!-- jumbotron -->

    <div class="jumbotron">
            <h1 class="display-4">Cadastro de Produtos</h1>
          
          
    <form class="form-horizontal" method="POST">
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