<?php

$usuario = logarUsuario("Lais Silva", 1);
//$usuario = ["logado"=> true, "nome"=> "Lais J Silva", "nivelAcesso"=> 0];
//$usuario = "";

$produtos = [
    "produto1" => ["nome" => "Curso Fullstack", "descricao" => "Curso fullstack ensina programação", "preco" => 1.200, "img" => "img/produto1.jpg"], 
    "produto2" => ["nome" => "Curso Mobile Android", "descricao" => "O curso de te ensina a criar apps", "preco" => 1.400, "img" => "img/produto2.jpg"]
    "produto3" =>["nome" => "Curso FullStack ensina programação", "descricao" => "Um curso de programação incrivel", "preco" =>1200, "img" =>"img/produto1.jpg"],
    "produto4" =>["nome" => "Curso Moblie Andorid", "descricao" => "Um curso de criação de apps incrivel", "preco" =>1500, "img" =>"img/produto2.png"],
    "produto5" =>["nome" => "Curso FullStack ensina programação", "descricao" => "Um curso de programação incrivel", "preco" =>1200, "img" =>"img/produto1.jpg"],
    "produto6" =>["nome" => "Curso Moblie Andorid", "descricao" => "Um curso de criação de apps incrivel", "preco" =>1500, "img" =>"img/produto2.jpg"],
];

//a imagem entra na array tb (com link da pasta)

$produtos = addProduto("Curso de UX", "Curso Incrivel", 2000, 'img/produto2.png', $produtos);

$categorias = ["Cursos", "Tutoriais", "Artigos", "Fórum", "Códigos"];
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>