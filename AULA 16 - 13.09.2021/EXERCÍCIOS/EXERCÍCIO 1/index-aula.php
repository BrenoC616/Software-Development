<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 - Funções</title>
</head>
<body>

<?php

    $a;

    ## Funções Checagem de tipo ##

    gettype($a); ## Retorna tipo da variável ##
    is_array($a); ## Verifica se é um array e retorna true ou false ##
    is_bool($a); ## Verifica se é um booleano e retorna true ou false ##
    is_double($a); ## Verifica se é um double e retorna true ou false ##
    is_float($a); ## Verifica se é um float e retorna true ou false ##
    is_int($a); ## Verifica se é um int e retorna true ou false ##
    is_integer($a); ## Mesmo que is_int($a) ##
    is_long($a); ## Mesmo que is_int($a) ##
    is_real($a); ## Mesmo que is_float($a) ##
    is_string($a); ## Verifica se é uma string e retorna true ou false ##
    is_object($a); ## Verifica se é um objeto e retorna true ou false ##

    ## Funções Verificação de variáveis ##

    empty($a); ## Verifica se a variável esta vazia e retorna true ou false ##
    isset($a); ## Verifica se a variável foi declarada e esta vazia e retorna true ou false ##
    unset($a); ## Esvazia uma variável deixando ela nula ##

    ## Função Data e Hora ##

    $a = getdate();
    $hora = $a < 10  ? "0" . $a['hours'] : $a['hours'];
    echo "$hora";
    echo "<br>";

    ## Funções Matemáticas ##

    abs(-57); ## Retorna o valor absoluto do número passado ##
    min(5, 9, 1); ## Retorna o menor valor de uma lista de números ##
    min(5, 9, 1); ## Retorna o maior valor de uma lista de números ##
    ceil(0.40); ## Arredonda para cima e retorna um número inteiro ##
    floor(0.60); ## Arredonda para baixo e retorna um número inteiro ##
    pi(); ## Retorna o número PI ##
    rand(1, 100); ## Retorna um valor aleatório em um range especificado ##
    round($var); ## Arredonda para um número inteiro (0.0 a 0.4 = 0 e 0.5 a 0.9 = 1) ##
    sqrt($var); ## Retorna a raiz quadrada do número passado ##

    ## Funções String ##

    $var = "Olá Mundo!";

    strlen($var); ## Retorna o tamanho de uma string​ ##​
    str_word_count($var); ##Retorna a quantidade de palavras da string ##​​
    strrev($var); ## Retorna a string em modo reverso​ ##​
    str_replace($w, $r, $text); ## Substitui uma parte do texto​ ##​
    explode(" ", $var); ## Quebra texto em um array ## ​
    implode(" ", /*$var*/ ); ## Remonta um array em texto​ ##​
    strtolower($var); ## Converte um texto para minúscula​ ##​
    strtoupper($var); ## Converte um texto para maiúscula​ ##​
    ucwords($var); ## Converte a primeira letra de cada palavra em maiúscula​ ##​

?>
    
</body>
</html>