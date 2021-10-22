<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>P006</title>
    </head>
    <body>
        
        <?php

            $nome = "Breno César";
            $sobrenome = "Ferreira";
            $idade = 17;
            $cidade = "Miguelópolis";
            $estado = "São Paulo";
            $endereco = "Rua Hilário Alves de Freitas, nº 380";
            $bairro = "Centro";

            $cadastro = array($nome, $sobrenome, $idade, $cidade, $estado, $endereco, $bairro);

            echo "Olá, me chamo <b>$cadastro[0] $cadastro[1]</b>, tenho $cadastro[2] anos e moro em $cadastro[3], $cadastro[4], na $cadastro[5], $cadastro[6]. <br>
            Sou aluno do curso de Informática para Internet <br>";

        ?>

    </body>
</html>