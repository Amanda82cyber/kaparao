<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $nome_soc = $_POST["nome_soc"];
    $sexo = $_POST["sexo"];
    $orient = $_POST["ori_sex"];
    $data = $_POST["data_nasc"];
    $mae = $_POST["mae"];
    $pai = $_POST["pai"];
    $cpf = $_POST["cpf"];
    $nis = $_POST["nis"];
    $rg = $_POST["rg"];
    $exp = $_POST["exp"];
    $org_exp = $_POST["org_exp"];
    $nacionalidade = $_POST["nacionalidade"];
    $naturalidade = $_POST["naturalidade"];
    $UF = $_POST["UF"];
    $etnia = $_POST["etnia"];
    $est_civil = $_POST["est_civil"];
    $prof = $_POST["prof"];
    $def = $_POST["def"];
    $ocup = $_POST["ocup"];
    $empresa = $_POST["empresa"];
    $renda = $_POST["renda"];
    $escolaridade = $_POST["esco"];

    setcookie("CPF", $cpf);

    $inserir = "INSERT INTO pessoas(nome, nome_social, sexo, orientacao_sexual, data_nascimento, mae, pai, CPF,
    RG, NIS, cor_etnia, profissao, ocupacao, empresa, renda, orgao_rg, expedicao_rg, estado_civil, naturalidade, nacionalidade, UF_naturalidade, deficiencia, grau_instrucao) VALUES('$nome', '$nome_soc', '$sexo', '$orient', '$data', '$mae', '$pai', '$cpf', '$rg', '$nis', '$etnia', '$prof', '$ocup', '$empresa', '$renda', '$org_exp', '$exp', '$est_civil', '$naturalidade', '$nacionalidade', '$UF', '$def', '$escolaridade')";

    mysqli_query($conexao, $inserir) or die("0" .mysqli_error($conexao));

    echo "1";
?>