<?php include 'topo.php'?>
<!-- JUMBOTROM -->
    <div class="jumbotron">
        <h1 class="display-4">Produtos</h1>
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
        $sql = mysqli_query($link, 'select * from produtos');
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
<!-- FIM JUMBOTROM -->
</body>
</html>