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

        form {
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

    <form action="./scripts/processamento.php" method="post" class="d-flex justify-content-center align-items-center">

        <div class="card center-card">

            <h5 class="card-header">Formulário</h5>
            <div class="card-body">

                <h5 class="card-title">Preencha com suas informações.</h5>
                <p class="card-text">Os seguintes items são obrigratórios para o registro.</p>

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="nome "placeholder="Nome" aria-label="Nome">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" aria-label="Sobrenome">
                    </div>
                </div>
                <br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"></span>
                    <input type="number" class="form-control" name="idade" placeholder="Idade" aria-label="Idade" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"></span>
                    <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>