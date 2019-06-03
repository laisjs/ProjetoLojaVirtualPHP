<!--para os cards de imagem ficarem do mesmo tramanho, todas as imagens preciso ter o mesmo tamamnho-->

<?php

include_once "funcoes.php";
$usuario = ["logado"=> true, "nome"=> "Lais J Silva", "nivelAcesso"=> 0];
//$usuario = "";

$produtos = [
    "produto1" =>["nome" => "Curso Fullstack", "descricao" => "Curso fullstack ensina programação", "preco" => 1.200, "img" => "img/produto1.jpg"], 
    "produto2" =>["nome" => "Curso Mobile Android", "descricao" => "O curso de te ensina a criar apps", "preco" => 1.400, "img" => "img/produto2.jpg"],
    "produto3" =>["nome" => "Curso FullStack ensina programação", "descricao" => "Um curso de programação incrivel", "preco" =>1200, "img" =>"img/produto1.jpg"],
    "produto4" =>["nome" => "Curso Moblie Andorid", "descricao" => "Um curso de criação de apps incrivel", "preco" =>1500, "img" =>"img/produto2.jpg"],
    "produto5" =>["nome" => "Curso FullStack ensina programação", "descricao" => "Um curso de programação incrivel", "preco" =>1200, "img" =>"img/produto1.jpg"],
    "produto6" =>["nome" => "Curso Moblie Andorid", "descricao" => "Um curso de criação de apps incrivel", "preco" =>1500, "img" =>"img/produto2.jpg"],
    ];

    //a imagem entra na array tb (com link da pasta)

$categorias = ["Cursos", "Tutoriais", "Artigos", "Fórum", "Códigos"];
    
?>



<!--as informações de um produto, cada produto está dentro das arrays. Ou seja, dentro da array que é produtos, temos outras
duas arrays especificando os produtos. Para imprimir essas informações vamos usar o forech = que percorre uma array quando 
tem associação e valor ex: nome=> Vinicius

Exemplo: $pessoa = ["nome" => "lais", "sobrenome" => "Silva", "idade" => 30> 

foreach ($pessoa as $chave => $value){
    echo "$chave: $value <br>";

    '$chave corresponde as variaveis e $value aos valores (ele sabe o que é o que porque 
    por causa da posição das coisas que estão na array)

    
}-->



<!DOCTYPE html>
        <html lang="en">
        <?php include "head.php"; ?> <!--aqui foi incluido o head que foi criado em outra página-->
        <!--<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Loja Virtual</title>
        </head>-->
        <!-- bootstrap-->
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

        <?php include "header.php"; ?> <!--aqui foi incluido o header criado fatiado em outra página-->
       
        <!--<header>
        
        aqui ta a nav-->


            <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
       o que chamamos de conteiener-->

           <!--<a class="navbar-brand" href="#">Cursos</a>

       aqui fica o nome do projeto-->
           <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

    ai fica eh uma div que segura a ul que quando estiver nor esponsivo transforma em menu hamburger -->
               <!--<ul class="navbar-nav">-->

               <?php  //if(isset ($usuario) && $usuario != "" && $usuario ['logado']): ?>
            <!--isset = ess variavel existe?-->

                    <?php //if ($usuario ['nivelAcesso'] == 0): ?>

                <!--<li class="nav-item active">
                    <a class="nav-link" href="#">Ações <span class="sr-only">(current)</span></a>
                </li>

                    <?php //else: ?>

  else da variavel usuario existente?-->

                
                <!--<li class="nav-item active">
                    <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
                </li>

                    <?php //endif; ?>           

                <li class= "nav-item">
                <a class= "nav-link" href= "#"> Olá <?php //echo $usuario ['nome'];?></a>

                </li>

                   <?php //else: ?>

                
                  <li class= "nav-item">
                <a class= "nav-link" href= "#"> Login </a>

                </li>
                 <?php //endif;?>


                </ul>
            </div>
            </nav>
<nav> 
    <ul class= "row mt-3 justify-content-center">
        <?php //foreach ($categorias as $categoria):?>
        <li class= "col-md-2"><?php echo $categoria?></li>

 ?=$categoria? forma reduzida, sintaxe curta, só da certo quanto é uma linh só que vc quer imprimir-->
        <?php //endforeach; ?>
    <!--</ul>


</nav>


            </header>-->

            <main class= "container mt-5">

            <!-- ela vai segurar os cards. Tag main, ela fala que começa todo o conteúdo, a main substitui o section-->
              <section class= "row">
                  <?php foreach ($produtos as $chave=> $produto): ?>
                  <!-- vai fechar onde terminar a estrutura da coluna trocar value por produto (no singular)-->  
                                
                  
              <!--coluna para segurar-->

              <div class= "col-md-4 mt-3"> 
                <!--utiliti-->
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $produto["img"]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php  echo $produto ["nome"]; ?></h5>
                        <p class="card-text"><?php  echo $produto ["descricao"]; ?></p>
                        <h4  class= "text-success"> R$<?php  echo $produto ["preco"]; ?></a>
<!-- Button trigger modal -->
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $chave; ?>">

                Comprar
               </button>
                        <!--teve que abrir o php aqui porque tinha uma array com outra array dentro, então pra imprimir precisa
                        chamar em cada lugar. Então será impresso um card para cada produto da array-->
                </div>
              </div>
              </div>
              <?php endforeach; ?>                    
            
              </section>
            </main>



<!-- Modal -->
<!-- atributos: data-toogle: vai abrir o modal e fechar tb. Ele vai abrir o modal que tenha o id #exampleeModal
class = "modal fade" são so efeitos na hora de aparecer o modal. Ou seja, o botão vai abrir o modal que tem o id #exampleeModal
modalcontent - onde vai estar todo o conteúdo -->

<?php  foreach ($produtos as $chave=>$produto):?>
<div class="modal fade" id="<?php echo $chave; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<!--aqui o id="exampleModal" será substitudo por $chave-->


<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Produto: <?php echo $produto ["nome"];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form method="POST" action= "sucesso.php"> <!--sucesso.php é uma outra página-->
                    
                   
                    <div class="form-group">

                    <input type = "text" name "nomeProduto" value= "<?php echo $produto ["nome"]; ?>" hidden>
                    <input type="text" name="nomeCliente" placeholder="Nome Completo"> 
                    </div>
                    <div class="form-group">
                    <input type="number" name="cpfCliente" placeholder="CPF">
                    </div>
                    <div class="form-group">
                    <input type="number" name="cartaoCliente" placeholder="Cartão de Credito">
                    </div>
                    <div class="form-group">
                    <input type="date" name="dataValidadeCartao" placeholder="Data de Validade do Cartão de Credito">
                    </div>
                    <div class="form-group">
                    <input type="number"maxlength="3" name="cvvCartao" placeholder="CVV do Cartão">
                    </div>
                
            </div>
            <div class="modal-footer">
                <div class ="text-primary">Preço Total: R$<?php echo $produto["preco"];?> </div>
                <button type="submit" class="btn btn-primary">Finalizar Compra</button>
                </form>
            </div>
            </div>
        </div>
        </div>
<?php endforeach; ?>


    <body> 

    




<!-- javascript -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
</body>
</html>