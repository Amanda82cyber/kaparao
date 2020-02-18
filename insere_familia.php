<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $parentesco = $_POST["parentesco"];
    $ocup = $_POST["ocup"];
    $renda = $_POST["renda"];
    $escolaridade = $_POST["escolaridade"];
    $etnia = $_POST["etnia"];
    $cpf = $_COOKIE["CPF"];

    $inserir = "INSERT INTO composicao_familiar(nome, idade, parentesco, ocupacao, renda, escolaridade, cor_etnia, CPF) VALUES('$nome', '$idade', '$parentesco', '$ocup', '$renda', '$escolaridade', '$etnia', '$cpf')";

    mysqli_query($conexao, $inserir) or die("0" .mysqli_error($conexao));

    echo "1";
?>