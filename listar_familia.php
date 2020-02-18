<?php
	header("Content-Type: Application/json");
	
    include("conexao.php");
    
	$consulta = "SELECT * FROM composicao_familiar WHERE CPF = " . $_COOKIE["CPF"] ." ORDER BY nome";
	
	$resultado = mysqli_query($conexao,$consulta) or die("0" .mysqli_error($conexao));
	
	while($linha = mysqli_fetch_assoc($resultado)){
		$matriz["familia"][] = $linha;
	}
	
	echo json_encode($matriz);
?>