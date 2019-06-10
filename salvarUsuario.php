<?php 
include_once"funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
$item == ""?$contadorInputVazio++:0;
}
if($contadorInputVazio == count($_POST)){
echo "<h1>Você não enviou nenhuma informação sobre o usuario</h1>";
echo '<a class-"btn btn-primary" href="cadastroUsuario.php"> Voltar para a página de cadastro!</a>';
exit;
}

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = password_hash($_POST['senhaUsuario'], PASSWORD_DEFAULT);
$nivelDeAcesso = $_POST['nivelDeAcesso'];

if(addUsuario($nomeUsuario, $emailUsuario, $senhaUsuario, $nivelDeAcesso)){
    echo '<h1>Usuario cadastrado com sucesso!</h1>';
} else{
    echo '<h1>Erro na hora de salvar!</h1>';
}


?>