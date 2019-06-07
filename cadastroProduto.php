<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
<?php include_once "header.php"; ?>


<main class="container">
    <section class="row">
        <div class="col-md-6">
        <form action="salvarProduto.php" method= "post" enctype="multipart/form-data">
<!--action="salvarProduto.php"-->
<!--enctype="multipart/form-data"> esse é um novo recurso pra enviar arquivos para o servidor-->

  <div class="form-group">
    <label for="nomeProduto">Nome do Produto</label>
    <input type="text" class="form-control" id="nomeProduto"  placeholder="Nome do Produto" name= "nomeProduto">
  </div>
  
  <div class="form-group">
    <label for="precoProduto">Preço do Produto</label>
    <input type="number" step="any" class="form-control" id="precoProduto"  placeholder="Preço do Produto" name= "precoProduto">
  </div>
  
  <div class="form-group">
    <label for="descProduto">Descrição do Produto</label>
    <textarea class="form-control" name="descProduto" id="descProduto"></textarea>
  </div>
 

  <!--imagem do produto-->
  <div class="form-group">
    <label for="imgProduto">Imagem do Produto</label>
    <input type="file" class="arquivo" id="imgProduto" name= "arquivo">
  </div>

  <!--botao-->
  <button class="btn btn-success" type="submit">Finalizar cadastro</button>

</form>  
        
        
        
        
        
        </div>
    </section>
</main>

  
</body>
</html>