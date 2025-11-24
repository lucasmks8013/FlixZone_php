<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar filmes</title>
    <style>
        body {
            background-color: #000;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 40px;
            font-family: Arial, sans-serif;
        }

        #logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        #logo img {
            width: 120px;
            height: auto;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 90%;
            max-width: 400px;
            background: #111;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 12px rgba(255,255,255,0.1);
        }

        label {
            color: white;
            margin-bottom: 5px;
            text-align: left;
        }

        input, select {
            border-radius: 10px;
            border: none;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
        }

        #registrarFilme {
            background-color: #1e90ff;
            cursor: pointer;
            text-shadow: 0px 0px 6px black;
            border-radius: 10px;
            padding: 12px;
            font-weight: bold;
            color: white;
            transition: 0.2s;
        }

        #registrarFilme:hover {
            background-color: #4682b4;
        }

        table {
            margin-top: 30px;
            border-collapse: collapse;
            width: 90%;
            max-width: 600px;
            background: #111;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 10px;
            color: white;
            text-align: center;
            border-bottom: 1px solid #333;
        }

        #btn-apagar {
            cursor: pointer;
            transition: 0.2s;
        }

        #btn-apagar:hover {
            text-shadow: 0px 0px 8px red;
        }

        blockquote {
            color: gray;
            text-align: center;
            margin-top: 20px;
        }

        button {
            margin-top: 20px;
            background-color: #ff4444;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>

    <div>
        <div id="logo">
            <img src="../img/Logo FlixZone.png" alt="Logo FlixZone">
        </div>

        <h1>Alterar filmes</h1>

        <form action="../crudd/alterar.php" method="post">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" required>

            <label for="anoLancamento">Ano lançado:</label>
            <input type="number" name="anoLancamento" id="anoLancamento" required>

            <label for="generoFilme">Gênero:</label>
            <select name="generoFilme" id="generoFilme" required>
                <option value="">Selecione uma das opções</option>
                <option value="acao">Ação</option>
                <option value="comedia">Comédia</option>
                <option value="drama">Drama</option>
                <option value="ficcao_cientifica">Ficção científica</option>
                <option value="romance">Romance</option>
                <option value="terror">Terror</option>
            </select>

            <input type="submit" name="registrarFilme" id="registrarFilme" value="Salvar alterações">
        </form>

       
</body>
</html>
