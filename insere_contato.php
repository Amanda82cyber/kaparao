<?php
    include("conexao.php");

    $end = $_POST["end"];
    $num = $_POST["num"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cid = $_POST["cid"];
    $UF = $_POST["UF"];
    $cep = $_POST["cep"];
    $tel = $_POST["tel"];
    $cel = $_POST["cel"];
    $email = $_POST["email"];
    $cpf = $_COOKIE["CPF"];

    $consulta = "SELECT CPF_pessoa FROM contato WHERE CPF_pessoa = $cpf";

    $resultado = mysqli_query($conexao, $consulta);

    if(mysqli_num_rows($resultado) == 0){
        $inserir = "INSERT INTO contato(CPF_pessoa, endereco, num_casa, complemento, bairro, cidade, UF_cidade, telefone, celular, CEP, email) VALUES('$cpf', '$end', '$num', '$complemento', '$bairro', '$cid', '$UF', '$tel', '$cel', '$cep', '$email')";

        mysqli_query($conexao, $inserir) or die("0" .mysqli_error($conexao));
    }else{
        $atualizar = "UPDATE contato SET 
                        endereco = $end,
                        num_casa = $num,
                        complemento = $complemento,
                        bairro = $bairro,
                        cidade = $cid,
                        UF_cidade = $UF,
                        telefone = $tel,
                        celular = $cel,
                        CEP = $cep,
                        email = $email
                      WHERE CPF_pessoa = $cpf";

        mysqli_query($conexao, $atualizar) or die("0" .mysqli_error($conexao));
    }

    echo "1";
?>