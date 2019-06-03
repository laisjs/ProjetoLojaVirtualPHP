<?php



//criar função para validar compra
include_once "funcoes.php";

function validarCompra($dadosCompras){
    $erros = []; //array vazio, se dados de compras tiver vazio, ou seja, nula, eu vou colocar nos erros
if (!$dadosCompras){
    $erros [] = "Não foi recebido nenhum dados para realizar a compra!";
}

if (!validarNome($dadosCompras['nomeCliente'])){
    //nomeCliente cada valor do input ele vai colocar na associação do name. Se por ventura essa função validar nome e 
//retornar falso
$erros[] = "Verifique se seu nome está corretor, e se é maiorr que 2 caracteres!";
}

if (!validarCPF ($dadosCompras['cpfCliente'])){
    $erros[] = "CPF invalido! Tente de novo!";

}

if (!validarCartao ($dadosCompras['cartaoCliente'])){
    $erros[] = "Numero de cartão inválido";

}

if (!validarDataValidade ($dadosCompras['dataValidadeCartao'])){
    $erros[] = "Data de validade vencida!";

}

if (!validarCVV ($dadosCompras['cvvCartao'])){
    $erros[] = "Número de CVV inválido";

}

return $erros;
//a array vazia de erros é pq se der algum erro eu vou la e coloco na minmha array de erros. 
};

$errosValidacao = validarCompra($_POST);
//pois vai retornar uma array dentro do erro de







//pra saber se ta recebendo as informações: coloca
//vard_dump ($_POST);

//if ($_POST){
    
//if($_POST ["nomeCliente"] == ""){
    //string vazia, array vazia, false, são valores falsos
    //header("location:index.php");
    //}

   // $nomeCompleto = $_POST ['nomeCliente'];
    //$nomeProduto = $_POST ['nomeProduto'];
    
//}else {
   // header("location:index.php");

//}



?>



<!DOCTYPE html>
<html lang="en">

<?php include "head.php";?>

<body>

    <?php include "header.php";?>
    <main class="container">
        <section class="row">

            <?php if(count($errosValidacao)>0): ?>

            <div class="col-md-12">
                <!--Exibir erros de cadastro -->
                <ul>

                    <?php foreach($errosValidacao as $erro): ?>
                    <li> <?php echo $erro; ?> 
                    </li>
                    <?php endforeach;?>
                </ul>

            </div>

                <div class="col-md 12">
                    <div class="alert alert-success" role="alert">
                        Olá <?php echo $_POST['nomeCliente']; ?> parabéns pela sua compra do produto <?php echo $_POST['nomeProduto']; ?>
                    </div>
                </div>
<?php endif;?>
                <div class="col-md-12">
                    <a href="index.php" class="btn btn-primary"> Voltar para home! </a>
                </div>


        </section>
    </main>


</body>

</html>