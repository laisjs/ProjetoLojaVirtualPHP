<?php

function logarUsuario($nome, $nivelDeAcesso){
    $usuario =["logado"=>true,"nome"=>$nome, "nivelAcesso"=>$nivelDeAcesso];
    return $usuario;
}

function addProduto($nome, $descricao, $preco, $img, $produtos){
    $novoProduto = ['nome'=>$nome, 'descricao' =>$descricao, 'preco'=>$preco, 'img'=>$img ];
    $chave = count($produtos) + 1;
    $produtos["produto$chave"] = $novoProduto;
    return $produtos;
}

//validar o nome:
//condição ele não pode ser vazio e tem que ter mais do que dois ou três caracteres, a função tem que retornar true ou false
//para a pergunta: "esse nome é válido?"
function validarNome ($nome){
    return $nome != "" && strlen($nome) >= 3;

}

//validar o cpf
//is_interger é uma função (isso é um número?) e vai retornar sim ou não/true ou false


//como o formulário ele transforma em string, troca o count por strlen
function validarCPF ($cpf){
    return strlen ($cpf) == 11;
}

//validar cartao de crédito

function validarCartao ($nrnCartao){
    return strlen ($nrnCartao) == 16;
}

//validardatadocartao
//como estamos querendo que retorne apenas boleano não precisa criar um if, pq o return economiza linha de código

function validarDataValidade ($dataValidade){
return $dataValidade > date('y-m-d');
}

//validar o cvv do cartao

function validarCVV ($cvv){
    return  return strlen ($cvv) == 3;
}