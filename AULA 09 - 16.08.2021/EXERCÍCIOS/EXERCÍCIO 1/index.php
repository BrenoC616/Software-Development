<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <?php

            $n1 = 50;
            $n2 = 45;
        
            if ($n1 > $n2) {
                echo "O primeiro número é maior! (Condição Verdadeira)";
            };

            echo "<br>";

            $periodo = "manhã";

            if ($periodo == "manhã") {
                echo "Bom dia!";
            } else {
                echo "Boa tarde!";
            }

            echo "<br>";

            if ($periodo == "manhã") {
                echo "Bom dia!";
            } elseif ($periodo == "tarde") {
                echo "Boa tarde!";
            } else {
                echo "Boa noite!";
            }
            
        ?>

    </body>
</html>