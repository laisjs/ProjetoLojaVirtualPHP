<?php 
include_once "funcoes.php";
//echo "<pre>";
//<pre> deixa o texto pré formatado
//var_dump($_FILES);


//exemplo de if - 1
if($_POST['nomeProduto'] == ""){
//se não existir um post e um files 
echo "<h1>Você não enviou nenhuma informação sobre o produto</h1>";
echo '<a class-"btn btn-primary" href="cadastroProduto.php"> Voltar para a página de cadastro!</a>';
exit;
}
//pra parar de executar o código se ele encontrar um erro


//exemplo 2 de validação
//include_once"funcoes.php";
//$contadorInputVazio = 0;
//foreach($_POST as $item){
    //$item == ""?$contadorInputVazio++:0
//}
//if($contadorInputVazio == count($_POST)){
//echo "<h1>Você não enviou nenhuma informação sobre o produto</h1>";
//echo '<a class-"btn btn-primary" href="cadastroProduto.php"> Voltar para a página de cadastro!</a>';
//exit;
//}



$imgAceitas = ["image/png", "image/jpg", "img/jpeg"];
$erroEnvio = $_FILES['arquivo']['error'];
$nomeProduto = $_POST["nomeProduto"];
$precoProduto = $_POST["precoProduto"];
$descProduto = $_POST["descProduto"];
$nomeArquivo = $_FILES["arquivo"]["name"];
$arquivoTmp = $_FILES["arquivo"]["tmp_name"];
$caminhoImg = "img/$nomeArquivo";
$typeFile = $_FILES['arquivo']['type'];


if($erroEnvio !== 0){
    echo "<h1>Houve um erro no envio do arquivo, verifique e tente novamente</h1>";
    echo '<a class-"btn btn-primary" href="cadastroProduto.php"> Voltar para a página de cadastro!</a>';
    exit;  
}

if(array_search($typeFile, $imgAceitas)== false){
//se for menor que zero, significa que ele nao identificou nenhuma posição na array
echo "<h1>Extensão do arquivo inválida, verifique se o arquivo é uma imagem do tipo png, jpg ou jpeg</h1>";
echo '<a class-"btn btn-primary" href="cadastroProduto.php"> Voltar para a página de cadastro!</a>';
exit; 
}

move_uploaded_file($arquivoTmp, "img/$nomeArquivo");

addProduto($nomeProduto, $descProduto, $precoProduto, $caminhoImg)


?>

