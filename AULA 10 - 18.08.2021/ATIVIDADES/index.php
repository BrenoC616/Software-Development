<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividades - Desenvolvimento de Software</title>
    </head>
    <body>
        
        <?php

            //Atividade 1
        
            $valor1 = 1;
            $valor2 = 2;

            if ($valor1 > $valor2) {
                echo "$valor1 + $valor2 = " . ($valor1 + $valor2);
            } else {
                echo "$valor1 - $valor2 = " . ($valor1 - $valor2);
            }

            echo "<br>";

            //Atividade 2

            $texto = "Olá Mundo!";

            if (strlen($texto) > 15) {
                echo "O texto inserido passou do limite de caracteres (Max.: 15)";
            } else {
                echo $texto;
            }

            echo "<br>";

            //Atividade 3

            $numero1 = 6;
            $numero2 = 4;
            
            if (($numero1 % 2 == 0) && ($numero2 % 2 == 1)) {
                echo "Apenas o primeiro número é par";
            } elseif (($numero1 % 2 == 1) && ($numero2 % 2 == 0)) {
                echo "Apenas o segundo número é par";
            } elseif (($numero1 % 2 == 0) && ($numero2 % 2 == 0)) {
                echo "Os dois números são pares";
            } else {
                echo "Nenhum dos números são pares";
            }

            echo "<br>";

            //Atividade 4

            $valorProduto = 59.90;
            $parcelas = 4;

            switch ($parcelas) {
                case '1':
                    echo $valorProduto - ($valorProduto * 0.10);
                    break;

                case '2':
                    echo $valorProduto + ($valorProduto * 0.15);   
                    break;

                case '3':
                    echo $valorProduto + ($valorProduto * 0.20);
                    break;

                default:
                    echo "Erro no número de parcelas! (Parcelas devem ser de 1 a 3)";
                    break;
            }

            echo "<br>";

            //Atividade 5

            $valor = true;
            
            switch ($valor) {
                case is_string($valor):
                    echo "É uma string!";
                    break;

                case is_numeric($valor):
                    echo "É um número!";
                    break;

                case is_bool($valor):
                    echo "É um booleano!";
                    break;

                case is_array($valor):
                    echo "É uma array!";
                    break;
                
                default:
                    echo "Erro ao testar valor, provavelmente não é uma string, número, valor booleano ou array";
                    break;
            }
            
        ?>

    </body>
</html>