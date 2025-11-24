<?php

session_start();

$titulo = $_GET["titulo"];
$anoLancamento = $_GET["anoLancamento"];
$generoFilme = $_GET["generoFilme"];


if( !isset( $_SESSION["filmes"] ) ) {
    $_SESSION["filmes"] = array();
}

$film = [
    "titulo" => $titulo,
    "anoLancamento" => $anoLancamento,
    "generoFilme" => $generoFilme,
    
];

array_push($_SESSION["filmes"], $film);

header("location: index.php");
