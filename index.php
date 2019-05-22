<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  

    <?php

       $nome = "Lais";

// tudo que tiver com cifrão e uma palavra é uma variável (toda vez que colocar o cifrão transforma em variável)
       
// tem que ter sempre o $ pq sem isso ele entende que é uma constante, aquela que nunca muda de valor ou seja pra imprimir
//o nome você coloca o cifrão e o nome da variável que é "nome"

if ($nome == "Lais") {
    var_dump ($nome. "<br>");

    //o var_dump imprimi a variavel, fala que tipo que ela é e o tamanho da string (ele soma tudo que estiver dentro do parenteses como string)
      //quando coloca aspas duplas ele aceita a variável dentro, agora se colocar aspas simples ele imprime o texto
    //literal
    }  
    else {
        echo "Não é a Laís";
    }
//no parenteses vai a condição e na chaves a resposta se for verdadeira
// pra imprimir um if fica o echo e a variável

for ($i = 0; $i < 5; $i++){
    echo "Olá $nome" . "<br>";
    // é com o ponto que fazemos concatenação de informações
    //quando coloca aspas duplas ele aceita a variável dentro, agora se colocar aspas simples ele imprime o texto
    //literal
    }

    ?>

     
</body>
</html>