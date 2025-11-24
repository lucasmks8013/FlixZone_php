<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
    <link rel="icon" type="image/png" href="../img/Logo FlixZone (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/add_filme.css">
</head>

<body>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                <div id="img">
                    <img src="../img/Logo FlixZone.png" alt="Logo" width="200" height="200">
                </div>
            </div>
            <div class="col-md-12 d-flex flex-column" id="formulario">

                <div id="titulo" class="text-center mb-4">
                    <h1>Excluir Filmes/Séries</h1>

                </div>
                <div class="box" id="campos">

                    <div class="form-group">
                        <label for="id" class="form-label">ID:</label>
                        <input type="int" class="form-control" id="int" required>
                    </div>

                    <div class="row mt-4" id="btn">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" onclick="window.location.href='pagInicial.php'">Excluir</button>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>
