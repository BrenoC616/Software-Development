<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>📖</text></svg>">
        <title>Exercícios Práticos</title>
    </head>
    <body>
        
        <?php
        
            ######----------------Exercício 1----------------######

            $meses = array(
            "Janeiro" => "January", 
            "Fevereiro" => "February", 
            "Março" => "March", 
            "Abril" => "April", 
            "Maio" => "May", 
            "Junho" => "June", 
            "Julho" => "July", 
            "Agosto" => "August", 
            "Setembro" => "September", 
            "Outubro" => "October", 
            "Novembro" => "November", 
            "Dezembro" => "December"
            );
        
            $data = getdate();

            $mes = array_search($data['month'], $meses);
        
            echo "$mes";
            echo "<br>";
        
            ######----------------Exercício 2----------------######
        
            $numeros = array();
        
            for ($i=0; $i <= 19; $i++) { 
                $numeros[$i] += rand(1, 100);
            }
        
            $min = min($numeros);
            $max =  max($numeros);
        
            /*
            foreach($numero as $a) {
                echo $a . "<br>";
            }
            */
        
            echo "Menor valor: $min. Maior valor: $max.";
            echo "<br>";    
        
            ######----------------Exercício 3----------------######
        
            $num = array();
        
            echo "Números da sorte: ";
        
            for ($i=0; $i <= 5; $i++) { 
                $num[$i] += rand(1, 60);
                echo "$num[$i] ";
            }
        
            echo "<br>";
        
            ######----------------Exercício 4----------------######
        
            $phrase = "Carro é um objeto usado para locomoção!";

            $phrase = str_replace("Carro", "Bicicleta", $phrase);
        
            $qtd_characters = strlen($phrase);
            $qtd_words = str_word_count($phrase);
            $reverse = strrev($phrase);
        
            echo "$phrase - Qtd de Caracteres: $qtd_characters. Qtd de Palavras: $qtd_words.<br>";
            echo "Frase ao crontrário: $reverse";

        ?>

    </body>
</html>