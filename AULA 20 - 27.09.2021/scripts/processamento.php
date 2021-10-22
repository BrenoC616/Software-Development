<?php

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];

    function r($name) {return $_POST[$name];}

    $nome = r('nome');
    $sobrenome = r('sobrenome');
    $idade = r('idade');
    $email = r('email');

    print_r($nome);
    print_r($sobrenome);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        aside {
            width: 30%;
            float: right;
        }

        .center {
            height: 100vh;
        }

        .side {
            width: 65%;
            float: left;
        }

        .center-card {
            max-width: 950px;
        }
    </style>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center center">

        <div class="card center-card">

            <h5 class="card-header">Concluído</h5>
            <div class="card-body">

                <h5 class="card-title">Registro realizado com Sucesso.</h5>
                <p class="card-text">
                    <?php

                        echo "Olá $nome $sobrenome. De $idade anos de Idade. 
                        <br>
                        Recebemos seu registro e contactaremos para mais informações em seu Email: $email";

                    ?>
                </p>
                
                <a href="../index.php">
                    <button type="button" class="btn btn-primary">OK</button>
                </a>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>