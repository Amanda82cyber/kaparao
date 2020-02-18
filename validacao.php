<?php
	include("conexao.php");
	
	$CPF = $_POST["CPF"];
	$op = $_POST["op"];
	$senha = $_POST["senha"];
	
	if($op == "Usuário"){
		$consulta = "SELECT * FROM pessoas
					  WHERE CPF = '$CPF'
					  AND senha = '$senha'";
				 
		$resultado = mysqli_query($conexao, $consulta) or die ("0" .mysqli_error($conexao));
		
		if(mysqli_num_rows($resultado) == 1){
			if(!(isset($_COOKIE["CPF"]))){
				setcookie("CPF", $CPF);
			}
			setcookie("oqe", "usuario");
            $linha = mysqli_fetch_assoc($resultado);
            if($linha["nome_social"] != ""){
				setcookie("nome", $linha["nome_social"]);
            }else{
				setcookie("nome", $linha["nome"]);
            }
			echo "1";
		}else{
			echo "2";
		}
	}elseif($op == "CRAS"){
		$consulta = "SELECT * FROM CRAS
					 WHERE CPF = '$CPF'
					 AND senha = '$senha'";
				 
		$resultado = mysqli_query($conexao, $consulta) or die ("0" .mysqli_error($conexao));
		
		if(mysqli_num_rows($resultado) == 1){
			if(!(isset($_COOKIE["CPF"]))){
				setcookie("CPF", $CPF);
			}
			setcookie("oqe", "CRAS");
            $linha = mysqli_fetch_assoc($resultado);
            setcookie("nome", $linha["nome"]);
			echo "1";
		}else{
			echo "2";
		}
	}else{
        $consulta = "SELECT * FROM administrador
					 WHERE CPF = '$CPF'
					 AND senha = '$senha'";
				 
		$resultado = mysqli_query($conexao, $consulta) or die ("0" .mysqli_error($conexao));
		
		if(mysqli_num_rows($resultado) == 1){
			if(!(isset($_COOKIE["CPF"]))){
				setcookie("CPF", $CPF);
			}
			setcookie("oqe", "Administrador");
            $linha = mysqli_fetch_assoc($resultado);
            setcookie("nome", $linha["nome"]);
			echo "1";
		}else{
			echo "2";
		}
    }
?>