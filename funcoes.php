<?php

function logarUsuario($nome, $nivelDeAcesso){
    $usuario =["logado"=>true,"nome"=>$nome, "nivelAcesso"=>$nivelDeAcesso];
    return $usuario;
}

function addProduto($nome, $descricao, $preco, $img){
    $jsonProdutos = file_get_contents("Produtos.json");
    $produtos = json_decode($jsonProdutos, true);
    //$produtos = $produtos ["Produtos"];
    
    $chave = count($produtos["Produtos"]) + 1;
    $novoProduto = ["id"=>"produto$chave",'nome'=>$nome, 'descricao' =>$descricao, 'preco'=>$preco, 'img'=>$img ];
    $produtos ["Produtos"][]=$novoProduto;   
    $jsonProdutos = json_encode($produtos);
    file_put_contents("Produtos.json", $jsonProdutos);

    return true;
    //add produto deu certo? Se sim ok. 
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
    return strlen ($cvv) == 3;
}

function addUsuario($nomeUsuario, $emailUsuario, $senhaUsuario, $nivelDeAcesso){
    $jsonUsuarios = file_get_contents("Usuarios.json");
    //file_get_contents entra dentro desse arquivo e pega todo o conteudo
    $Usuarios = json_decode($jsonUsuarios, true);
    //json_decode transforme nosso jason em array, 
 
    
    $chave = count($Usuarios["usuarios"]) + 1;
    //eu to perguntando  quantos itens tem no meu array e somando mais 1
    $novoUsuario = ["id"=>"usuarios$chave",'nome'=>$nomeUsuario, 'email' =>$emailUsuario, 'senha'=>$senhaUsuario, 'nivelDeAcesso'=>$nivelDeAcesso];
    
    
    $Usuarios ["usuarios"][]=$novoUsuario;   
    $jsonUsuarios = json_encode($Usuarios);
    

    return file_put_contents("Usuarios.json", $jsonUsuarios);
    //add produto deu certo? Se sim ok. 
}