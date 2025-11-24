<?php

    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Dados recebidos do formulário
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Verifica se o usuário existe na sessão e se a senha está correta
    if (isset($_SESSION['usuarios'][$email]) && $_SESSION['usuarios'][$email]['senha'] === $senha) {
        $_SESSION['usuario'] = $email; // guarda quem está logado
        header('Location: pagInicial.php');
        exit;
    } else {
        $erro = "E-mail ou senha incorretos.";
    }
}
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
    <link rel="stylesheet" href="../css/pagnsLogin.css">
</head>

<body>
    <div class="container-fluid">
        
        <div class="row">
            
            <!-- COLUNA ESQUERDA (imagem + texto) -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div id="img">
                    <img src="../img/Logo FlixZone.png" alt="Logo" width="400" height="400">
                </div>
                <div id="texto" class="mt-3 text-center">
                    <h3>Assista ao que você ama, quando e onde quiser.</h3>
                    <br>
                    
                    <p>
                        Explore um catálogo completo de filmes, séries e lançamentos exclusivos, tudo em um só lugar. 
                        Maratone seus títulos favoritos, descubra novas histórias e tenha entretenimento ilimitado com qualidade de cinema na sua tela. 
                        Assine agora e transforme cada momento livre em uma experiência inesquecível!
                    </p>
                </div>
            </div>

            <!-- COLUNA DIREITA (titulo + formulário) -->
            <div class="col-md-6 d-flex flex-column" id="formulario">
                
                <div id="titulo" class="text-center mb-4">
                    <h1>FAÇA O SEU LOGIN</h1>
                    
                </div>
<form method="POST" action="">
                <div class="box" id="campos">
                    
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" name="senha" class="form-control" id="senha">
                    </div>

                

                    <div class="row mt-4" id="btn">
                        <div class="col-12">
                            <button type = "submit" class="btn btn-primary btn-block" >Entrar</button>
                        </div>
                    </div>

                    <div class="row mt-3" id="cad">
                        <div class="col-12">
                            <a href="cadUsuario.php">Não tem cadastro? Clique aqui.</a>
                        </div>

                    </div>
                </div>
                </form>
                <?php if (!empty($erro)): ?>
                    <div class="alert alert-danger mt-3">
                        <?= $erro ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>
