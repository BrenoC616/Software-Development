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


            
            $valor = array(34, 56, 73);

            if ($valor[0] > $valor[1] && $valor[0] > $valor[2]) {
                echo "Primeiro valor é maior!";
            } elseif ($valor[1] > $valor[0] && $valor[1] > $valor[2]) {
                echo "Segundo valor é maior!";
            } else {
                echo "Terceiro valor é maior!";
            };
            
        ?>

    </body>
</html>