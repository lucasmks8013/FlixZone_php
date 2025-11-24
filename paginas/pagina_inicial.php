<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <style>
        /* ===== Estilo do corpo ===== */
        body {
            background-color: #0b0c0d; /* fundo escuro */
            font-family: 'Times New Roman', Times, serif;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        /* ===== Centralização do conteúdo ===== */
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1, h2 {
            text-align: center;
            color: #b2c6ee; /* azul claro */
        }

        hr {
            border: 1px solid #106ffd; /* destaque azul */
            margin: 20px 0;
        }

        /* ===== Mensagem de nenhum filme ===== */
        .mensagem {
            color: #b2c6ee; /* azul claro */
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        /* ===== Tabela de filmes ===== */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #106ffd;
        }

        th {
            background-color: #106ffd; /* azul destaque */
            color: #ffffff;
        }

        td {
            background-color: #0b0c0d; /* fundo escuro */
            color: #b2c6ee; /* azul claro para contraste */
        }

        #btn-apagar {
            cursor: pointer;
            color: #ff4c4c;
            transition: 0.2s;
        }

        #btn-apagar:hover {
            color: #ffffff;
        }

        /* ===== Botão ===== */
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #106ffd;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.2s;
        }

        button:hover {
            background-color: #b2c6ee;
            color: #0b0c0d;
        }

        /* ===== Imagens ===== */
        img {
            width: 150px;
            height: 150px;
            display: block;
            margin: 20px auto;
        }

    </style>
</head>
<body>
    <?php include("menu.php"); ?>

    <main>
        <h1>Bem Vindo!</h1> 
        <h2>Filmes e séries:</h2>
        <hr>

        <?php if(!isset($_SESSION["filmes"])) : ?>
            <p class="mensagem"><blockquote>Nenhum filme adicionado</blockquote></p>
        <?php else: ?>
            <table>
                <thead>                     
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Lançamento</th>
                        <th>Gênero</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="informacoes">
                    <?php for($i=0; $i < count($_SESSION["filmes"]); $i++) : ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $_SESSION["filmes"][$i]["titulo"] ?></td>
                            <td><?= $_SESSION["filmes"][$i]["anoLancamento"] ?></td>
                            <td><?= $_SESSION["filmes"][$i]["generoFilme"] ?></td>
                            <td id="btn-apagar" onclick='apagar("<?= $_SESSION["filmes"][$i]["titulo"] ?>", <?= $i ?>)'>✂️</td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
            <button onclick="apagarTudo()">Excluir lista de filmes</button>
        <?php endif ?>
    </main>

    <script>
        function apagar(nome, id) {
            if(confirm("Excluir " + nome + "?")) {
                window.location.href = "apagar_item.php?id=" + id;
            }
        }

        function apagarTudo() {
            if(confirm("Excluir todos os itens abaixo?")) {
                window.location.href = "limpar_lista.php";
            }
        }
    </script>
</body>
</html>
