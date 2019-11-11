<?php
include 'topo.php';
include './backend/conexao.php';

//Buscar dados do  último Id do banco vendas;
$sqlBuscar = "select * from vendas order by id_venda desc";
$tabela = mysqli_query($link,$sqlBuscar);

//$pega a linha da tabela sendo que a primeira posição é o ID linha[0]
$linha=mysqli_fetch_array($tabela);
$pegaUltimoId = $linha[0];
// cria uma variável global  $idv para o uso do ID em toda parte do código PHP nessa página
$GLOBALS['idv']=$pegaUltimoId;
?>

<!-- jumbotron -->
<div class="jumbotron">
    <form class="form-horizontal" action="itensvendidos.php?idv=$idv" method="POST"> 
    <fieldset>

    <!-- Form Name -->
    <legend>Efetuando Venda!</legend>

    <!-- Select Multiple -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="MostraProdutos">Selecione um produto</label>
        <div class="col-md-5">
          <select id="MostraProdutos" name="selectprod" class="form-control">
    <!-- código para preencher o select html com os nomes dos produtos do banco-->
        <?php
        // teste para mostrar se a variavel global está OK
        // echo $idv;
        include './backend/conexao.php';
      
        // sql para  trazer a listagem dos produtos
        // necessitaremos trazer o ID e o nome
        $sql = mysqli_query($link, 'select * from produtos');
        
        
        while ($linha = mysqli_fetch_array($sql)){
          //código para preencher o nome no select e armazenar o ID no campo value html
          // para que esse value seja enviado pelo método post para a inserção no banco 
          // itensVendidos 
          echo "<option value='$linha[0]'>$linha[1]</option>";
                
        };
        
    ?>

        </select>
      </div>
    </div>
    <!-- Text input-->

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="qtd">Quantidade</label>  
      <div class="col-md-1">
      <input id="qtd" name="qtd" type="text" class="form-control input-md">
        
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="inserir"></label>
      <div class="col-md-4">
        <input name="inserir" class="btn btn-primary" type ="submit" value="Inserir" />
      </div>
    </div>

    <!-- INSERIR BANCO -->
        <?php
        include './backend/conexao.php';
        // esse if serve para testar a promeira abertura da página html, pois o método post está
        // na mesma página sendo assim quando abrimos a primeira vez a página necessitamos setar algo nas variáveis abaixo.
        // um outro meio para resolver era enviar nulo a página anterior
        if (isset($_POST["selectprod"])){
          $fkidProduto = $_POST['selectprod']; //este código é preenchido com o value=#linha[0]...
          $quantidade= $_POST['qtd'];
          // $buscaProduto não necessita podemossetar no id_produto o $fkidProduto direto
          $buscaProduto = $fkidProduto;

          $tabval  = mysqli_query($link, "select * from produtos where id_produto = '$buscaProduto' ");
          $linhavalor = mysqli_fetch_array($tabval);
          // código para inserir no banco itensVendidos. 
          mysqli_query($link, "insert into itensVendidos (fk_id_venda, fk_id_produto, data_Venda, quantidade, valor_venda)
          values ('$idv', '$fkidProduto', NOW(), '$quantidade', '$linhavalor[2]')");
        }
        ?>
        </fieldset>
        </form>
       
<!-- Finalizar Venda        -->
      
<form class="form-horizontal" action="finalizar.php?idVenda=<?php echo $idv;?>" method="POST" >
          
  <!-- Text input-->
<?php
include './backend/conexao.php';
$query = "select fk_id_venda, SUM(valor_venda * quantidade) from itensVendidos where fk_id_venda='$idv'";
$result= mysqli_query($link,$query);
$linha= mysqli_fetch_array($result);
$GLOBALS['valor'] = round($linha[1],2);
?>
  <div class="form-group">
      <label class="col-md-4 control-label" for="valor">Valor Total:</label>  
      <div class="col-md-1">
      <input id="qtd" name="valor" type="text" class="form-control input-md" value="<?php echo $valor; ?>">
      </div>
    </div>
<button id="submit" type="submit" name="submit" class="btn btn-primary">Finalizar Venda</button>
</form>
<!-- Fim Finalizar Venda        -->


</div>




<!-- fim jumbotron -->

<!-- jumbotron mostra -->
<div class="jumbotron">
            <h1 class="display-4">Itens Vendidos</h1>
 
            <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Produto</th>
                  <th scope="col">Valor</th>
                </tr>
              </thead>
              <tbody>
    <?php
        include './backend/conexao.php';
        $sql = mysqli_query($link, " select produtos.nome, itensVendidos.quantidade, itensVendidos.valor_venda from itensVendidos inner
        join produtos on fk_id_produto=id_produto where fk_id_venda = $idv");
        while ($linha = mysqli_fetch_array($sql)){
          echo "<tr>";
          echo "<th scope='row'>$linha[0]</th>";
          echo "<td>$linha[1]</td>";
          echo "<td>$linha[2]</td>";
          echo "<td><a href='deletarproduto.php?id=$linha[0]'>Excluir</a></td>";
          echo "<td><a href='alterarproduto.php?id=$linha[0]'>Alterar</a></td>";
          echo "</tr>";
        };
    ?>
              </tbody>
            </table>
</div>
<!-- fim jumbotron mostra -->
</body>
</html>


