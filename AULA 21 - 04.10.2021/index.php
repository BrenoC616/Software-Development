<?php
    
    $multiplicaNumeros = array($_POST['multiplica-n1'], $_POST['multiplica-n2']);
    $somaNumeros = array($_POST['soma-n1'], $_POST['soma-n2']);
    $subtraiNumeros = array($_POST['subtrai-n1'], $_POST['subtrai-n2']);
    $divideNumeros = array($_POST['divide-n1'], $_POST['divide-n2']);

    function multiplica() {
        global $multiplicaNumeros;
        $resultado = $multiplicaNumeros[0] * $multiplicaNumeros[1];
        return $resultado;
    }

    function soma() {
        global $somaNumeros;
        $resultado = $somaNumeros[0] + $somaNumeros[1];
        return $resultado;
    }

    function subtrai() {
        global $subtraiNumeros;
        $resultado = $subtraiNumeros[0] - $subtraiNumeros[1];
        return $resultado;
    }

    function divide() {
        global $divideNumeros;
        $resultado = $divideNumeros[0] / $divideNumeros[1];
        $resultado = (is_infinite($resultado)) ? "Infinito!" : $resultado;
        return (is_nan($resultado)) ? "Não existe!" : $resultado;
    }

    function icon () {
        return "data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🔢</text></svg>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" <?php echo "href='" . icon() . "'" ?> >
        <title>Atividade</title>
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
                max-width: 750px;
            }
        </style>
    </head>
    <body>

        <form action="" method="post" class="d-flex justify-content-center align-items-center">

            <div class="card text-center center-card">

                <div class="card-header">Calculadora Form</div>
                <div class="card-body">

                    <aside>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Resultado</span>
                            <input type="text" class="form-control" disabled <?php echo "value='" . multiplica() . "'" ?> placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </aside>
                    <div class="input-group mb-3 side">
                        <label class="input-group-text"></label>
                        <input type="number" class="form-control" name="multiplica-n1" placeholder="Número" aria-label="Number">
                        <span class="input-group-text">*</span>
                        <input type="number" class="form-control" name="multiplica-n2" placeholder="Número" aria-label="Number">
                    </div>

                    <aside>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Resultado</span>
                            <input type="text" class="form-control" disabled <?php echo "value='" . soma() . "'" ?> placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </aside>
                    <div class="input-group mb-3 side">
                        <label class="input-group-text"></label>
                        <input type="number" class="form-control" name="soma-n1" placeholder="Número" aria-label="Number">
                        <span class="input-group-text">+</span>
                        <input type="number" class="form-control" name="soma-n2" placeholder="Número" aria-label="Number">
                    </div>

                    <aside>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Resultado</span>
                            <input type="text" class="form-control" disabled <?php echo "value='" . subtrai() . "'" ?> placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </aside>
                    <div class="input-group mb-3 side">
                        <label class="input-group-text"></label>
                        <input type="number" class="form-control" name="subtrai-n1" placeholder="Número" aria-label="Number">
                        <span class="input-group-text">-</span>
                        <input type="number" class="form-control" name="subtrai-n2" placeholder="Número" aria-label="Number">
                    </div>

                    <aside>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Resultado</span>
                            <input type="text" class="form-control" disabled <?php echo "value='" . divide() . "'" ?> placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </aside>
                    <div class="input-group mb-3 side">
                        <label class="input-group-text"></label>
                        <input type="number" class="form-control" name="divide-n1" placeholder="Número" aria-label="Number">
                        <span class="input-group-text">/</span>
                        <input type="number" class="form-control" name="divide-n2" placeholder="Número" aria-label="Number">
                    </div>

                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Calcular</button>

                </div>
                <div class="card-footer text-muted">Por Breno C.</div>

            </div>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
    </body>
</html>